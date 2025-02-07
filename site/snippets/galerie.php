<?php if ($page->galerie()->isNotEmpty()): ?>
        <div class="galerie">
          <?php foreach ($page->galerie()->toFiles() as $image): ?>
            <figure class="galerie_item">
              <img src="<?= $image->url() ?>" alt="<?= $image->alt()->or($image->filename()) ?>">
              <?php if ($image->caption()->isNotEmpty()): ?>
                <figcaption><?= $image->caption()->html() ?></figcaption>
              <?php endif; ?>
            </figure>
          <?php endforeach ?>
        </div>
      <?php endif ?>