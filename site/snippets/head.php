<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css("assets/styles.css") ?>
  <title>Kirby Basics Workshop</title>
</head>

<body>

  <nav>
    <ul>
      <li>
        <a href="<?= $site->url() ?>">Home</a>
      </li>
      <li>
        <a href="<?= page("projects")->url() ?>">Projects</a>
      </li>
      <li>
        <a href="<?= page("texts")->url() ?>">Texts</a>
      </li>
    </ul>
  </nav>