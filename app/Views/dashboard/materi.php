<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Materi</h1>

<div class="dropdown">
  <button class="btn btn-mulai dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilih materi
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/materi/bangundatar" onclick="alert('Kamu akan memasuki halaman materi. Klik OK untuk melanjutkan.')">Bangun Datar</a>
    <a class="dropdown-item" href="/materi/himpunan" onclick="alert('Kamu akan memasuki halaman materi. Klik OK untuk melanjutkan.')">Himpunan</a>
    <a class="dropdown-item" href="/materi/persamaa" onclick="alert('Kamu akan memasuki halaman materi. Klik OK untuk melanjutkan.')">Something else here</a>
  </div>
</div>


<?= $this->endSection(); ?>

<?php


if ($_GET['materi'] == 'bangundatar') {
  echo $this->include('dashboard/materi/bangundatar');
}
// echo $this->include('dashboard/materi/himpunan');


?>