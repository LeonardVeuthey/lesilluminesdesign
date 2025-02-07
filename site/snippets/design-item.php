


<a 
  data-stagger-list="" 
  data-category="<?= $item->categorie()->value() ?>" 
  href="<?= $item->url() ?>" 
  class="grid_link w-inline-block"
>
  <div class="item_fade">
    <h3 class="item_title w-dyn-bind-empty"><?= $item->nom()->html() ?></h3>
    <p class="item_designer w-dyn-bind-empty"><?= $item->designer()->html() ?></p>
  </div>
  <?php if ($vignette = $item->vignette()->toFile()): ?>
    <img src="<?= $vignette->url() ?>" alt="<?= $item->nom()->html() ?>" loading="lazy" class="item_img w-dyn-bind-empty">
  <?php endif; ?>
</a>
