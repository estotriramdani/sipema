<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<?php
$db = \Config\Database::connect();

$daftarsoal = $db->query("SELECT * from `materis` where kode_materi='" . $_GET['kode_materi'] . "'");

?>

<h1>Daftar Soal</h1>

<!-- flash message -->
<div>
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
</div>
<div class="dropdown mb-3">
  <a class="dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Urutkan berdasarkan materi
  </a>
  <div class="dropdown-menu" aria-labelledby=" dropdownMenuLink">
    <?php foreach ($materi as $m) : ?>
      <a class="dropdown-item" href="/pojokguru/daftarsoal?kode_materi=<?= $m->kode_materi; ?>"><?= $m->nama_materi; ?></a>
    <?php endforeach; ?>
  </div>
</div>

<table class="table w-100">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Materi/Soal</th>
      <th scope="col">Soal</th>
      <th scope="col">Kunci Jawaban</th>
      <th scope="col" class="text-center">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($soal as $s) : ?>
      <?php if ($s->kode_materi == $_GET['kode_materi']) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $s->kode_materi . "/" . $s->id_soal; ?></td>
          <td style="width: 40%;"><?= $s->pertanyaan; ?></td>
          <td><?= $s->jawaban; ?></td>
          <td>
            <a href="editsoal/<?= $s->id_soal; ?>" class="btn btn-sm btn-success mb-2" style="width: 100%;">Ubah </a>
            <form action=<?= base_url("soal/delete/$s->id_soal"); ?> class="d-inline">
              <input type="submit" value="hapus" class="btn btn-sm btn-danger" style="width: 100%;">
            </form>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </tbody>
</table>  
<p style="font-size: 10px;">Jika belum muncul silakan pilih materi kembali</p>

<?= $this->endSection();; ?>