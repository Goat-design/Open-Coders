<?php $this->layout('template', ['title' => $tapahtuma['nimi']]) ?>

<h1 class="project-title"><?= htmlspecialchars((string)$tapahtuma['nimi']) ?></h1>

<div class="project-meta">
  <?php if (!empty($tapahtuma['tyyppi'])): ?>
    <span class="tag"><?= htmlspecialchars((string)$tapahtuma['tyyppi']) ?></span>
  <?php endif; ?>

  <?php if (!empty($tapahtuma['vetaja'])): ?>
    <span class="project-lead">Vetäjä: <?= htmlspecialchars((string)$tapahtuma['vetaja']) ?></span>
  <?php endif; ?>
</div>

<div class="project-desc">
  <?= nl2br(htmlspecialchars((string)$tapahtuma['kuvaus'])) ?>
</div>

<p class="project-note">
  Roolit ja työnjako sovitaan projektin alussa Discordissa.
</p>

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
