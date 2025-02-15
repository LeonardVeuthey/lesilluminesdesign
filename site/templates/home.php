<?php snippet('header') ?>
<?php snippet('global') ?>


<div class="soon">
  <p class="soon_text">Les Illuminés Design</p>
  <p class="soon_text">Site en construction</p>
</div>


<div class="loader">
  <p class="h-big">les illuminés design</p>
  <p class="loader_text">Genève</p>
</div>

<?php
// Récupérer tous les enfants listés de la page "designs"
$items = page('designs')->children()->listed()->sortBy('title', 'asc'); ?>


<div class="grid search-container">
  <?php foreach ($items as $item): ?>
    <a
      data-stagger-list=""
      data-category="<?= $item->categorie()->value() ?>"
      href="<?= $item->url() ?>"
      class="grid_link w-inline-block">
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
  <img src="/assets\img\loupe.png" loading="lazy" alt="" class="menu_loupe">
  <div class="menu_wrapper">
    <a href="<?= page('home')->url() ?>" class="menu_link is-active">
      <p class="menu_link_text">all</p>
    </a>
    <a href="<?= page('mobilier')->url() ?>" class="menu_link">
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
  <div class="menu_search">
    <div class="menu_search_close">
      <img class="menu_search_img" src="/assets/img/croix.png" alt="">
    </div>

    <input class="menu_search_input" type="text" oninput="updateSearch(this.value)" placeholder="Rechercher par nom d'objet ou designer" id="search">
  </div>
</div>

<!-- FOOTER -->
<div class="footer">
  <p><?= $page->footer() ?></p>
</div>

<?php snippet('footer') ?>