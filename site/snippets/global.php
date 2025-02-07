<div class="global">
  <div class="top-fade"></div>
  <div class="bottom-fade"></div>

  <!-- NAVIGATION -->
  <div class="nav">

    <!-- name -->
    <a href="<?= page('home')->url() ?>" class="nav_link">
      <h1 class="nav_link_text">LES ILLUMINÉS DESIGN</h1>
    </a>

    <!-- navbar -->
    <div class="offset">
      <div class="navbar">
        <a href="<?= page('home')->url() ?>" aria-current="page" class="nav_link <?php echo (basename($_SERVER['REQUEST_URI']) == 'home') ? 'active' : ''; ?>">
          <h2 class="nav_link_text">Catalogue</h2>
        </a>
        <a href="<?= page('a-propos')->url() ?>" aria-current="page" class="nav_link <?php echo (basename($_SERVER['REQUEST_URI']) == 'a-propos') ? 'active' : ''; ?>">
          <h2 class="nav_link_text">À PROPOS</h2>
        </a>
        <!-- language -->
        <div class="nav_link">
          <?php foreach ($kirby->languages() as $index => $language): ?>
            <a class="nav_link_text" href="<?= $language->url() ?>" <?= e($kirby->language() === $language, 'class="active"') ?>>
              <?= strtoupper($language->code()) ?>
            </a>
            <?php if ($index < $kirby->languages()->count() - 1): ?>
              <span>-</span>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>


      <div class="nav_link is-close">
        <p class="nav_link_text">FERMER</p>
      </div>
      <a href="<?= page('home')->url() ?>" class="nav_link is-name w-inline-block">
        <p class="nav_link_text">LES ILLUMINÉS DESIGN</p>
      </a>
    </div>
    <div class="offset_trigger">
      <p class="nav_link_text">menu</p>
    </div>

  </div>
</div>