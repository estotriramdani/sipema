<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Kuis {materi}</h1>

<p>Pertanyaan 1</p>

<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="radio" name="pilihan" id="jawaban1" aria-label="Radio button for following text input">
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button">
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="radio" name="pilihan" id="jawaban2" aria-label="Radio button for following text input">
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button">
</div>


<script src="/js/kuis.js"></script>


<?= $this->endSection(); ?>