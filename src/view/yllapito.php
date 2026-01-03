<?php $this->layout('template', ['title' => 'Ylläpito']) ?>

<h1>Ylläpitosivut</h1>

<div class="yllapito">

  <form method="get" action="">
    <button type="submit" name="listaa_kayttajat" value="1">Listaa käyttäjät</button>
  </form>

  <?php
    $listaa = isset($_GET['listaa_kayttajat']) && $_GET['listaa_kayttajat'] === '1';
  ?>

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

</div>
