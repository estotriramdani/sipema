<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Kuis <?= $_GET['nama_materi']; ?></h1>


<?php
$db = \Config\Database::connect();

$quiz = $db->query("SELECT * from `soals` where kode_materi='" . $_GET['kode_materi'] . "'");

?>

<div id="question-wrapper">
  <p style="font-size: 11px;">Soal bersifat berurut. Ketika jawaban dipilih maka jawaban akan menghilang dan jawaban akan tersimpan.</p>

  <?php $i = 1; ?>
  <?php foreach ($quiz->getResult() as $q) : ?>
    <div id="pertanyaan-<?= $i; ?>" class="pertanyaan">
      <form action="">
        <p><?= $q->pertanyaan; ?></p>
        <div onclick="style='display: none; transition: 0.3s; content: haha'">
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




<h3>Pembahasan</h3>

<div>
<?php foreach ($quiz->getResult() as $q) : ?>
    <div id="pertanyaan-<?= $i; ?>" class="pertanyaan">
      <form action="">
        <p><?= $q->pertanyaan; ?></p>
        <p style="font-size: 10px;">Jawaban yang benar adalah opsi yang ditandai</p>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" disabled <?php if ($q->jawaban == 'a') {echo "checked";} ?>>
          <label class="form-check-label"><?= $q->pilihan_a; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" disabled <?php if ($q->jawaban == 'b') {echo "checked";} ?>>
          <label class="form-check-label"><?= $q->pilihan_b; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" disabled <?php if ($q->jawaban == 'c') {echo "checked";} ?>>
          <label class="form-check-label"><?= $q->pilihan_c; ?></label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" disabled <?php if ($q->jawaban == 'd') {echo "checked";} ?>>
          <label class="form-check-label"><?= $q->pilihan_d; ?></label>
        </div>

      </form>
    </div>
    <hr>
    <?php $i++; ?>
  <?php endforeach; ?>

<form action="/kuis/action" class="mt-3" method="post">
  <input type="hidden" id="nilai" value="0" name="nilaiKuis">
  <input type="hidden" id="kode-materi" value="<?= $_GET['kode_materi']; ?>" name="kode_materi">
  <input type="hidden" id="nama-materi" value="<?= $_GET['nama_materi']; ?>" name="nama_materi">
  <input type="submit" id="selesai" value="Selesai Review" class="btn btn-mulai">
</form>

</div>



<script src="/js/kuis.js"></script>
</div>




<?= $this->endSection(); ?>