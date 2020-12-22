<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Kuis <?= $_GET['nama_materi']; ?></h1>


<?php
$db = \Config\Database::connect();

$quiz = $db->query("SELECT * from `soals` where kode_materi='" . $_GET['kode_materi'] . "'");

?>

<div id="question-wrapper">

  <?php $i = 1; ?>
  <?php foreach ($quiz->getResult() as $q) : ?>
    <div id="pertanyaan-<?= $i; ?>" class="pertanyaan">
      <form action="">
        <p ><?= $q->pertanyaan; ?></p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="<?php if ($q->jawaban == 'a') {
                                                                                                  echo "true";
                                                                                                } else {
                                                                                                  echo "false";
                                                                                                } ?>" onclick="displayResult(this.value)">
          <label class="form-check-label"><?= $q->pilihan_a; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="<?php if ($q->jawaban == 'b') {
                                                                                                  echo "true";
                                                                                                } else {
                                                                                                  echo "false";
                                                                                                } ?>" onclick="displayResult(this.value)">
          <label class="form-check-label"><?= $q->pilihan_b; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="<?php if ($q->jawaban == 'c') {
                                                                                                  echo "true";
                                                                                                } else {
                                                                                                  echo "false";
                                                                                                } ?>" onclick="displayResult(this.value)">
          <label class="form-check-label"><?= $q->pilihan_c; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="<?php if ($q->jawaban == 'd') {
                                                                                                  echo "true";
                                                                                                } else {
                                                                                                  echo "false";
                                                                                                } ?>" onclick="displayResult(this.value)">
          <label class="form-check-label"><?= $q->pilihan_d; ?></label>
        </div>

      </form>
    </div>
    <hr>
    <?php $i++; ?>
  <?php endforeach; ?>

  <button class="btn btn-mulai" id="hitungSkor">Selesai kuis</button>

</div>

<div id="nilai-card">
  <div class="card"">
    <div class=" card-body">
    <div class="row">
      <div class="col-9">
        <h6 class="card-subtitle mb-2">Hasil Kuis</h6>
        <h5 class="card-title"><?= $_GET['nama_materi']; ?></h5>
      </div>
      <div class="col-3">
        <h2 class="card-text text-right nilai" id="nilai-kuis">nilai</h2>
      </div>
    </div>
    <small>Nilai maksimal 100</small>
  </div>
</div>


<form action="/kuis/action" class="mt-3" method="post">
  <input type="hidden" id="nilai" value="0" name="nilaiKuis">
  <input type="hidden" id="kode-materi" value="<?= $_GET['kode_materi']; ?>" name="kode_materi">
  <input type="submit" id="selesai" value="selesai" class="btn btn-mulai">
</form>

<script src="/js/kuis.js"></script>
</div>




<?= $this->endSection(); ?>