<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>
<h2><?= $page->author() ?></h2>

<p>Developed in <?= $page->location() ?></p>

<?php foreach ($page->slideshow()->toFiles() as $slideshowImage): ?>
  <img src="<?= $slideshowImage->url() ?>">
<?php endforeach ?>

<?= $page->text() ?>

<?php snippet("foot") ?>