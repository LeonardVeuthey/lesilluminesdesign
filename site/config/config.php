<?php
return [
  'debug'     => true,
  'languages' => true, // Active le multilingue
  'routes'    => [
    [
      'pattern' => 'api/designs/(:num)',
      'method'  => 'GET',
      'action'  => function ($pageNumber) {
          // Récupérer éventuellement la catégorie depuis une query string (ex: ?category=mobilier)
          $category = get('category');
          $designs = page('designs')->children()->listed();
          
          if ($category) {
              $allowedCategories = ['mobilier', 'luminaire', 'objet', 'archive'];
              if (in_array($category, $allowedCategories)) {
                  $designs = $designs->filterBy('categorie', $category);
              }
          }
          
          // Calculer l'offset et récupérer 20 objets
          $offset = ($pageNumber - 1) * 20;
          $items  = $designs->offset($offset)->limit(20);
          
          // Générer le HTML pour chaque objet en utilisant un snippet
          $html = '';
          foreach ($items as $item) {
              // Le troisième paramètre "true" permet de retourner le contenu du snippet
              $html .= snippet('design-item', ['item' => $item], true);
          }
          return $html;
      }
    ]
  ]
];
