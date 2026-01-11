<!DOCTYPE html>
<html lang="fi">
  <head>
    <link href="<?= BASEURL ?>/styles/styles.css" rel="stylesheet">
    <title>Open Coders - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
  </head>
  <body>
<header>
  <h1 class="logo">
    <a href="<?=BASEURL?>">Open Coders</a>
  </h1>

  <nav class="mainnav">
    <a href="<?=BASEURL?>/tapahtumat">Projektit</a>
    <a href="<?=BASEURL?>/tietoa">Tietoa</a>
  </nav>

  <div class="profile">
    <?php
      if (isset($_SESSION['user'])) {
        echo "<div>$_SESSION[user]</div>";
        echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
        if (!empty($_SESSION['admin'])) {
          echo "<div><a href='admin'>Ylläpito</a></div>";
        }
      } else {
        echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
      }
    ?>
  </div>
</header>


    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Open Coders by Goat</div>
    </footer>
  </body>
</html>
