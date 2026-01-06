<?php $this->layout('template', ['title' => 'Ylläpito']) ?>

<h1>Ylläpitosivut</h1>

<div class="yllapito">

  <form method="get" action="">
    <button type="submit" name="listaa_kayttajat" value="1">Listaa käyttäjät</button>
    <button type="submit" name="lisaa_projekti" value="1">Luo projekti</button>
  </form>

  <?php
    $listaa = isset($_GET['listaa_kayttajat']) && $_GET['listaa_kayttajat'] === '1';
    $lisaa_projekti = isset($_GET['lisaa_projekti']) && $_GET['lisaa_projekti'] === '1';
  ?>

  <?php if ($listaa || $lisaa_projekti): ?>
    <form method="get" action="" style="margin-top: 1rem;">
      <button type="submit">Takaisin</button>
    </form>
  <?php endif; ?>

  <?php if (!empty($info)): ?>
    <div class="info"><?= htmlspecialchars((string)$info) ?></div>
  <?php endif; ?>

  <?php if (!empty($errors) && is_array($errors)): ?>
    <div class="error" style="margin: 1rem 0;">
      <?php foreach ($errors as $e): ?>
        <div><?= htmlspecialchars((string)$e) ?></div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

  <?php if ($listaa): ?>

    <h2>Käyttäjät</h2>

    <?php if (empty($kayttajat)): ?>
      <p>Ei löytynyt käyttäjiä.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nimi</th>
            <th>Discord</th>
            <th>Email</th>
            <th>Vahvistettu</th>
            <th>Admin</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($kayttajat as $k): ?>
            <tr>
              <td><?= htmlspecialchars((string)($k['idhenkilo'] ?? '')) ?></td>
              <td><?= htmlspecialchars((string)($k['nimi'] ?? '')) ?></td>
              <td><?= htmlspecialchars((string)($k['discord'] ?? '')) ?></td>
              <td><?= htmlspecialchars((string)($k['email'] ?? '')) ?></td>
              <td><?= !empty($k['vahvistettu']) ? 'Kyllä' : 'Ei' ?></td>
              <td><?= !empty($k['admin']) ? 'Kyllä' : 'Ei' ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>

  <?php endif; ?>


  <?php if ($lisaa_projekti): ?>

    <h2>Uusi projekti</h2>

    <div class="info">
      Roolit ja työnjako sovitaan projektin alussa Discordissa.
    </div>

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

</div>
