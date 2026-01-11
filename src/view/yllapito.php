<?php $this->layout('template', ['title' => 'Ylläpito']) ?>

<h1>Ylläpitosivut</h1>

<div class="yllapito">

<?php
  $lisaa_projekti = isset($_GET['lisaa_projekti']) && $_GET['lisaa_projekti'] === '1';
  $muokkaa = !empty($muokattava);

  if ($muokkaa) {
    $lisaa_projekti = false;
  }

  $tila = $lisaa_projekti || $muokkaa;
?>


<?php if (!$tila): ?>

    <h2>Projektit</h2>

    <?php if (!empty($projektit)): ?>
      <table>
        <thead>
          <tr>
            <th>Nimi</th>
            <th>Tyyppi</th>
            <th>Vetäjä</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($projektit as $p): ?>
            <tr>
              <td><?= htmlspecialchars((string)$p['nimi']) ?></td>
              <td><?= htmlspecialchars((string)$p['tyyppi']) ?></td>
              <td><?= htmlspecialchars((string)$p['vetaja']) ?></td>
              <td>
                <a href="<?= BASEURL ?>/admin?muokkaa=<?= (int)$p['idtapahtuma'] ?>">Muokkaa</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>Ei projekteja.</p>
    <?php endif; ?>

<?php endif; ?>

<?php if (!$tila): ?>
  <form method="get" action="">
    <button type="submit" name="lisaa_projekti" value="1">Luo projekti</button>
  </form>
<?php endif; ?>
 

  <?php if ($tila): ?>
    <form method="get" action="" style="margin-top: 1rem;">
      <button type="submit">Takaisin</button>
    </form>
  <?php endif; ?>

  <?php if ($tila && !empty($info)): ?>
    <div class="info"><?= htmlspecialchars((string)$info) ?></div>
  <?php endif; ?>

  <?php if (!empty($errors) && is_array($errors)): ?>
    <div class="error" style="margin: 1rem 0;">
      <?php foreach ($errors as $e): ?>
        <div><?= htmlspecialchars((string)$e) ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>


  <?php if ($lisaa_projekti): ?>

    <h2>Uusi projekti</h2>


    <form method="post" action="">
      <input type="hidden" name="action" value="lisaa_projekti">

      <div>
        <label>Projektin nimi</label>
        <input type="text" name="nimi" required>
      </div>

      <div>
        <label>Tyyppi</label>
        <input type="text" name="tyyppi" placeholder="esim. peli / verkkopalvelu / sovellus" required>
      </div>

      <div>
        <label>Vetäjä</label>
        <input type="text" name="vetaja" placeholder="Nimi / Nimimerkki" required>
      </div>

      <div>
        <label>Maksimi osallistujamäärä</label>
        <input type="number" name="osallistujia" min="1" placeholder="esim. 10">
      </div>

      <div>
        <label>Kuvaus</label>
        <textarea name="kuvaus" rows="6" required></textarea>
      </div>

      <input type="submit" value="Tallenna projekti">
    </form>

  <?php endif; ?>

  <?php if (!empty($muokattava)): ?>

  <h2>Muokkaa projektia</h2>

  <form method="post" action="">
    <input type="hidden" name="action" value="paivita_projekti">
    <input type="hidden" name="id" value="<?= (int)$muokattava['idtapahtuma'] ?>">

    <div>
      <label>Projektin nimi</label>
      <input type="text" name="nimi" required
        value="<?= htmlspecialchars((string)$muokattava['nimi']) ?>">
    </div>

    <div>
      <label>Tyyppi</label>
      <input type="text" name="tyyppi" required
        value="<?= htmlspecialchars((string)$muokattava['tyyppi']) ?>">
    </div>

    <div>
      <label>Vetäjä</label>
      <input type="text" name="vetaja" required
        value="<?= htmlspecialchars((string)$muokattava['vetaja']) ?>">
    </div>

    <div>
      <label>Maksimi osallistujamäärä</label>
      <input type="number" name="osallistujia" min="1"
        value="<?= htmlspecialchars((string)$muokattava['osallistujia']) ?>">
    </div>

    <div>
      <label>Kuvaus</label>
      <textarea name="kuvaus" rows="6" required><?= htmlspecialchars((string)$muokattava['kuvaus']) ?></textarea>
    </div>

    <input type="submit" value="Tallenna muutokset">
  </form>

<?php endif; ?>

</div>
