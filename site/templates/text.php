<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>
<h2><?= $page->author() ?></h2>


<div class="bodytext">
  <?= $page->text() ?>
</div>

<?php snippet("foot") ?>