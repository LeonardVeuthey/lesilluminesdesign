<?php snippet('header') ?>
<?php snippet('global') ?>

<div class="page">
  <div class="page_wrapper">
    <div class="page-image_wrapper">
      <?php if ($image = $page->image()): ?>
        <img class="page-image_image" src="<?= $image->url() ?>" alt="<?= $image->alt()->or('Image of ' . $page->title()) ?>">
      <?php endif ?>
    </div>
    <div class="page_content">
      <div class="page_content_title_wrapper">
        <h1><?= $page->titre() ?></h1>
        <p><?= $page->description() ?></p>
      </div>

      <!-- FAQ -->
      <div class="faq">
        <?php snippet('faq') ?>
      </div>

      <!-- FORMULAIRE -->
      <?php snippet('formulaire-a-propos') ?>


    </div>
  </div>
</div>

<?php snippet('footer') ?>