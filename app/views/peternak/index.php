<h5>data Peternak</h5>

<table>
  <tr>
    <td>No</td>
    <td>Peternak</td>
    <td>alamat</td>
    <td></td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach ($data['peternak'] as $peternak) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $peternak['pemilik']; ?></td>
      <td><?= $peternak['alamat']; ?></td>
      <td><a class="bagde" href="<?= BASEURL; ?>/peternak/detail/<?= $peternak['id']; ?>">detail</a></td>
    </tr>
  <?php endforeach; ?>
</table>