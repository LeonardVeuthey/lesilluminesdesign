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
          <p class="p-small is-bold">Designer : <?= $page->designer()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small is-bold">Editeur : <?= $page->editeur()->html() ?></p>

        </div>
        <div class="details_line">
          <p class="p-small is-bold">Année : <?= $page->annee()->html() ?></p>

        </div>
        <div class="details_line">
          <p class="p-small is-bold">Origine : <?= $page->origine()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small is-bold">Dimensions : <?= $page->dimensions()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small is-bold">Etat : <?= $page->etat()->html() ?></p>
        </div>
        <div class="details_line">
          <p class="p-small is-bold">Prix : <?= $page->prix()->html() ?></p>
        </div>
      </div>


      <?php snippet('galerie') ?>

      <div class="form-block w-form">
        <h3>Contactez-nous</h3>
        <p class="p-small">Pour toutes question contactez-nous à info@illuminésdesign.ch ou au +41 79 488 37 38. Ou directement via le formualaire ci dessous.</p>
        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="6794bae1a127eb60fee1bf2e" data-wf-element-id="8b492a3f-974a-8cec-6f8f-ac29aeefdff4"><input class="form_field w-input" maxlength="256" name="Nom-2" data-name="Nom 2" placeholder="nom" type="text" id="Nom-2"><input class="form_field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="email" type="email" id="email-2" required=""><textarea placeholder="message" maxlength="5000" id="message-2" name="message-2" data-name="Message 2" class="form_field w-input"></textarea><label class="w-checkbox"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="p-small w-form-label" for="checkbox-2">J’ai lu et j’accepte la politique de confidentialité.</span></label><input type="submit" data-wait="Please wait..." class="button w-button" value="Submit"></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>