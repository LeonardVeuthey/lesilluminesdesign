<?php snippet('header') ?>
<?php snippet('global') ?>

<!--<div class="loader">
  <p class="h-big">les illuminés design</p>
  <p class="loader_text">Genève</p>
</div>-->

<?php
// Récupérer tous les enfants listés de la page "designs"
$items = page('designs')->children()->listed()->sortBy('title', 'asc');

// Filtrer uniquement les items ayant la catégorie "mobilier"
$filteredItems = $items->filterBy('categorie', 'mobilier');
?>

<div class="grid">
  <?php foreach ($filteredItems as $item): ?>
    <a 
      data-stagger-list="" 
      data-category="<?= $item->categorie()->value() ?>" 
      href="<?= $item->url() ?>" 
      class="grid_link w-inline-block"
    >
      <div class="item_fade">
        <h3 class="item_title"><?= $item->nom()->html() ?></h3>
        <p class="item_designer"><?= $item->designer()->html() ?></p>
      </div>
      <?php if ($vignette = $item->vignette()->toFile()): ?>
        <img src="<?= $vignette->url() ?>" alt="<?= $item->nom()->html() ?>" loading="lazy" class="item_img">
      <?php endif; ?>
    </a>
  <?php endforeach; ?>
</div>


<!-- MENU -->
<div class="menu">
  <!--<img src="/assets\img\loupe.png" loading="lazy" alt="" class="image">-->
  <div class="menu_wrapper">
    <a href="<?= page('home')->url() ?>" class="menu_link">
      <p class="menu_link_text">all</p>
    </a>
    <a href="<?= page('mobilier')->url() ?>" class="menu_link is-active">
      <p class="menu_link_text">mobilier</p>
    </a>
    <a href="<?= page('luminaires')->url() ?>" class="menu_link">
      <p class="menu_link_text">luminaires</p>
    </a>
    <a href="<?= page('objets')->url() ?>" class="menu_link">
      <p class="menu_link_text">objets</p>
    </a>
    <a href="<?= page('archives')->url() ?>" class="menu_link">
      <p class="menu_link_text">archives</p>
    </a>
  </div>
</div>






<div class="footer">
  <p><?= $page->footer() ?></p>
</div>

<?php snippet('footer') ?>
