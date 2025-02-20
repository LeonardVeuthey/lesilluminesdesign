<?php
return [
  'debug'     => false,
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
    ],
    [
      'pattern' => '/(:all)/designs',
          'action'  => function () {
            #$lang = kirby()->currentLanguage()->code();
            #print_r(kirby()->language());
          go("/");
      }

    ],
    [
      'pattern' => '/webapp/api/v1/search',
      'action'  => function () {
          header("Access-Control-Allow-Origin: *");
          include_once 'site/templates/get.search.php';
          return getSearch(kirby(), site());
      }
    ]

  ]
];
