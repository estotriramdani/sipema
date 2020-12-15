<?= $this->extend('layout/template-dashboard'); ?>



<?= $this->section('content'); ?>

<?php

// $db = \Config\Database::connect();

// $materi = $db->query("SELECT * from `materis`");
?>

<h1>Materi</h1>

<div class="dropdown">
  <button class="btn btn-mulai dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih materi
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php
    foreach ($materi as $m) : ?>
      <a class="dropdown-item" href="/materi?kode_materi=<?= $m->kode_materi; ?>&nama_materi=<?= $m->nama_materi; ?>" onclick="alert('Kamu akan memasuki halaman materi. Klik OK untuk melanjutkan.')"><?= $m->nama_materi; ?></a>
    <?php endforeach; ?>
  </div>
</div>

<div>
  <?php
  $kodeMateri = $_GET['kode_materi'];
  $namaMateri = $_GET['nama_materi'];

  $db = \Config\Database::connect();

  $query = $db->query("SELECT * FROM materis WHERE kode_materi='$kodeMateri'");

  foreach ($query->getResult() as $row) {
    echo "<h3>Materi: $namaMateri</h3>";
    echo $row->isi_materi;
  }

  ?>
</div>





<?= $this->endSection(); ?>