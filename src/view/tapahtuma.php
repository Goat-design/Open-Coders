<?php $this->layout('template', ['title' => $tapahtuma['nimi']]) ?>

<h1><?=$tapahtuma['nimi']?></h1>

<?php if (!empty($tapahtuma['tyyppi'])): ?>
  <div><strong>Tyyppi:</strong> <?=$tapahtuma['tyyppi']?></div>
<?php endif; ?>

<div><?=$tapahtuma['kuvaus']?></div>

<?php if (!empty($tapahtuma['vetaja'])): ?>
  <div><strong>Vetäjä:</strong> <?=$tapahtuma['vetaja']?></div>
<?php endif; ?>

<?php
  if ($loggeduser) {
    if (!$ilmoittautuminen) {
      echo "<div class='flexarea'><a href='ilmoittaudu?id=$tapahtuma[idtapahtuma]' class='button'>LIITY PROJEKTIIN</a></div>";
    } else {
      echo "<div class='flexarea'>";
      echo "<div>Olet liittynyt projektiin!</div>";
      echo "<a href='peru?id=$tapahtuma[idtapahtuma]' class='button'>POISTU PROJEKTISTA</a>";
      echo "</div>";
    }
  }
?>
