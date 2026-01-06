<?php $this->layout('template', ['title' => 'Projektit']) ?>

<h1>Projektit</h1>

<div class='tapahtumat'>
<?php

foreach ($tapahtumat as $tapahtuma) {

  echo "<div>";
    echo "<div>$tapahtuma[nimi]</div>";

    if (!empty($tapahtuma['tyyppi'])) {
      echo "<div>$tapahtuma[tyyppi]</div>";
    } else {
      echo "<div>Tyyppi: -</div>";
    }

    echo "<div><a href='tapahtuma?id=" . $tapahtuma['idtapahtuma'] . "'>TIEDOT</a></div>";
  echo "</div>";

}

?>
</div>

