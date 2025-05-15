<?php snippet("head") ?>

<h1><?= $page->title() ?></h1>

<ul class="projects-list">
  <?php foreach ($page->children() as $projectpage): ?>
    <li>
      <a href="<?= $projectpage->url() ?>">

        <?php if($projectpage->slideshow()->isNotEmpty()): ?>
          <img src="<?= $projectpage->slideshow()->toFiles()->first()->url() ?>">
        <?php endif ?>

        <p><?= $projectpage->title() ?></p>
        <p><?= $projectpage->author() ?></p>
      </a>
    </li>
  <?php endforeach ?>
</ul>

<?php snippet("foot") ?>