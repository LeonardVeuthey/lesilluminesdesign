<?php snippet('header') ?>
<?php snippet('global') ?>



</div>
<div class="page">
  <div class="page_wrapper">
    <div class="page-image_wrapper">
      <?php if ($vignette = $page->vignette()->toFile()): ?>
        <img class="page-image_image"src="<?= $vignette->url() ?>" alt="<?= $vignette->alt()->or($page->title()) ?>">
      <?php endif ?>

    </div>
    <div class="page_content">
      <div class="page_content_title_wrapper">
        <h1 class="item_name w-dyn-bind-empty"><?= $page->nom()->html() ?></h1>
        <h2 class="designer w-dyn-bind-empty"><?= $page->designer()->html() ?></h2>
        <p class="w-dyn-bind-empty"><?= $page->description()->html() ?></p>
      </div>
      <div class="details">
        <div class="details_line">
          <p class="p-small is-bold">Designer : </p><p class="p-small"><?= $page->designer()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small">Editeur : </p><p class="p-small"><?= $page->editeur()->html() ?></p>

        </div>
        <div class="details_line">
          <p class="p-small">Année : </p><p class="p-small"><?= $page->annee()->html() ?></p>

        </div>
        <div class="details_line">
          <p class="p-small">Origine : </p><p class="p-small"><?= $page->origine()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small">Dimensions : </p><p class="p-small"><?= $page->dimensions()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small">Etat : </p><p class="p-small"><?= $page->etat()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small">Prix : </p><p class="p-small"><?= $page->prix()->html() ?></p>
        </div>
      </div>


      <?php snippet('galerie') ?>

      <?php snippet('formulaire') ?>

      <button class="button is-big" onclick="window.history.back()">← Catalogue</button>

      
    </div>
  </div>
</div>

<?php snippet('footer') ?>