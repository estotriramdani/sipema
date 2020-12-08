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
    foreach ($materi->getResult() as $m) : ?>
      <a class="dropdown-item" href="/materi/<?= $m->kode_materi; ?>" onclick="alert('Kamu akan memasuki halaman materi. Klik OK untuk melanjutkan.')"><?= $m->nama_materi; ?></a>
    <?php endforeach; ?>
  </div>
</div>





<?= $this->endSection(); ?>