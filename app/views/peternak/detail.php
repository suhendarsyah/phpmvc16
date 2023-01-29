<h1>ini adalah halaman detail</h1>


<div class="card" style="width: 18rem;">
  <img src="<?= BASEURL; ?>/img/1.svg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Detail Peternak</h5>
    <p class="card-text">Nama : <?= $data['peternak']['pemilik']; ?></p>
    <p class="card-text">Alamat :<?= $data['peternak']['alamat']; ?></p>
    <p class="card-text">Nama Hewan:<?= $data['peternak']['hewan']; ?></p>
    <p class="card-text">Species :<?= $data['peternak']['jenishewan']; ?></p>
    <p class="card-text">Jumlah :<?= $data['peternak']['jumlahhewan']; ?></p>
    <p class="card-text">Jenis Kelamin :<?= $data['peternak']['jeniskelamin']; ?></p>
    <p class="card-text">Gejala :<?= $data['peternak']['gejala']; ?></p>
    <p class="card-text">Diagnosa :<?= $data['peternak']['diagnosa']; ?></p>
    <p class="card-text">Terapi :<?= $data['peternak']['terapi']; ?></p>
    <p class="card-text">Petugas :<?= $data['peternak']['petugas']; ?></p>
    <a href="<?= BASEURL; ?>/peternak" class="btn btn-primary">Kembali</a>
  </div>
</div>