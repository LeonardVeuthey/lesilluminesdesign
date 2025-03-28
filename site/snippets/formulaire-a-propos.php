<?php
if ($kirby->request()->is('POST')) {
  $data = [
    'name'    => get('name'),
    'email'   => get('email'),
    'message' => get('message')
  ];

  $errors = [];

  if (empty($data['name'])) {
    $errors['name'] = "Le nom est obligatoire.";
  }
  if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "L'email n'est pas valide.";
  }
  if (empty($data['message'])) {
    $errors['message'] = "Le message ne peut pas être vide.";
  }

  if (empty($errors)) {
    try {
      $email = kirby()->email([
        'from'     => 'contact@ton-domaine.com',
        'to'       => 'admin@ton-domaine.com',
        'subject'  => 'Nouveau message de ' . $data['name'],
        'replyTo'  => $data['email'],
        'body'     => $data['message']
      ]);

      $success = "Votre message a bien été envoyé. Merci !";
    } catch (Exception $e) {
      $errors['form'] = "L'envoi de l'email a échoué : " . $e->getMessage();
    }
  }
}
?>

<div class="form-block">
  <h3><?= $page->contactSubtitle() ?></h3>
  <p class="p-small"><?= $page->contactDescription() ?></p>

  <!-- form -->
  <form class="form" action="<?= $page->url() ?>" method="POST">
    <input placeholder="nom" class="form_field" type="text" id="name" name="name" value="<?= esc($data['name'] ?? '') ?>" required>
    <input placeholder="email" class="form_field" type="email" id="email" name="email" value="<?= esc($data['email'] ?? '') ?>" required>
    <textarea placeholder="message" class="form_field" id="message" name="message" required><?= esc($data['message'] ?? '') ?></textarea>
    <!-- success -->
    <?php if (!empty($success)) : ?>
      <p class="success"><?= $success ?></p>
    <?php endif; ?>

    <!-- error -->
    <?php if (!empty($errors)) : ?>
      <ul class="errors">
        <?php foreach ($errors as $error) : ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <button class="button" type="submit">Envoyer</button>
  </form>


</div>