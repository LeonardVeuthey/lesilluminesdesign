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

        <a
          href="<?= page('home')->url() ?>"
          class="nav_link">
          <h2 class="nav_link_text <?= basename(Url::path(Url::current())) == 'en' || basename(Url::path(Url::current())) == 'fr' ? 'active' : '' ?>">Catalogue</h2>
        </a>
        <a
          href="<?= page('a-propos')->url() ?>"
          class="nav_link">
          <h2 class="nav_link_text <?= basename(Url::path(Url::current())) == 'a-propos' ? 'active' : '' ?>">À PROPOS</h2>
        </a>
        <!-- language -->
        <div class="nav_link">

          <a class="nav_link_text <?= $kirby->currentLanguage()->code() == 'fr' ? 'active' : '' ?>" href="/fr">
            FR
          </a>
          <span class="nav_link_text">&nbsp;/&nbsp;</span>
          <a class="nav_link_text <?= $kirby->currentLanguage()->code() == 'en' ? 'active' : '' ?>" href="/en">
            EN
          </a>


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
</div>