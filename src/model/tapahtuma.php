<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeTapahtumat() {
    return DB::run('SELECT * FROM tapahtuma ORDER BY tap_alkaa;')->fetchAll();
  }

    function haeTapahtuma($id) {
    return DB::run('SELECT * FROM tapahtuma WHERE idtapahtuma = ?;',[$id])->fetch();
  }



function lisaaProjekti($nimi, $tyyppi, $kuvaus, $vetaja, $osallistujia) {
  $osallistujia = ($osallistujia === '' ? null : $osallistujia);

  $sql = "INSERT INTO tapahtuma
            (nimi, tyyppi, kuvaus, vetaja, osallistujia, tap_alkaa, tap_loppuu, ilm_alkaa, ilm_loppuu)
          VALUES
            (:nimi, :tyyppi, :kuvaus, :vetaja, :osallistujia, NOW(), NOW(), NOW(), NOW())";

  DB::run($sql, [
    ':nimi' => $nimi,
    ':tyyppi' => $tyyppi,
    ':kuvaus' => $kuvaus,
    ':vetaja' => $vetaja,
    ':osallistujia' => $osallistujia
  ]);

  return true;
}

function paivitaProjekti($id, $nimi, $tyyppi, $kuvaus, $vetaja, $osallistujia) {
  $osallistujia = ($osallistujia === '' ? null : $osallistujia);

  $sql = "UPDATE tapahtuma
          SET nimi = :nimi,
              tyyppi = :tyyppi,
              kuvaus = :kuvaus,
              vetaja = :vetaja,
              osallistujia = :osallistujia
          WHERE idtapahtuma = :id";

  DB::run($sql, [
    ':id' => $id,
    ':nimi' => $nimi,
    ':tyyppi' => $tyyppi,
    ':kuvaus' => $kuvaus,
    ':vetaja' => $vetaja,
    ':osallistujia' => $osallistujia
  ]);

  return true;
}

?>
