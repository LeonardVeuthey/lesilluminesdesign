<?php if($page->faq()->isNotEmpty()): ?>
  <?php foreach($page->faq()->toStructure() as $faq): ?>
    
      <div class="faq_question">
        <div class="faq_trigger">
          <p class="h-small"><?= $faq->question()->html() ?></p>
          <div class="faq_croix">
            <div class="faq_bar"></div>
            <div class="faq_bar is-vertical"></div>
          </div>
        </div>
        <div class="faq_content">
          <?= $faq->reponse()->kirbytext() ?>
        </div>
      </div>
    
  <?php endforeach ?>
<?php endif ?>