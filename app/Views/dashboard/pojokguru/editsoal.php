<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Ubah Soal #<?= $kode_soal; ?></h1>

<form action=<?= base_url("soal/save/$kode_soal"); ?> method="post">
  <div class="form-group row">
    <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
    <div class="col-sm-10">
      <select class="form-control" id="nama_materi" name="nama_materi">
        <option>Pilih materi</option>
        <?php foreach ($materi as $m) : ?>
          <option value="<?= $m->kode_materi; ?>" name="kode_materi"><?= $m->nama_materi; ?></option>
        <?php endforeach; ?>
      </select> </div>
  </div>
  <div class="form-group row">
    <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
    <div class="col-sm-10">
      <textarea name="pertanyaan" class="form-control editor">value="<?= (old('pertanyaan')) ? old('pertanyaan') : $pertanyaan; ?></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="pilihan_a">Pilihan A</label>
      <input type="text" class="form-control" id="pilihan_a" name="pilihan_a" value="<?= (old('pilihan_a')) ? old('pilihan_a') : $pilihan_a; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_b">Pilihan B</label>
      <input type="text" class="form-control" id="pilihan_b" name="pilihan_b" value="<?= (old('pilihan_b')) ? old('pilihan_b') : $pilihan_b; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_c">Pilihan C</label>
      <input type="text" class="form-control" id="pilihan_c" name="pilihan_c" value="<?= (old('pilihan_c')) ? old('pilihan_c') : $pilihan_c; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_d">Pilihan D</label>
      <input type="text" class="form-control" id="pilihan_d" name="pilihan_d" value="<?= (old('pilihan_d')) ? old('pilihan_d') : $pilihan_d; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="jawaban" class="col-sm-2 col-form-label">Kunci</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jawaban" name="jawaban" value="<?= (old('jawaban')) ? old('jawaban') : $jawaban; ?>">
    </div>
  </div>

  <input type="hidden" name="email" value="<?= $email; ?>">

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-mulai">Ubah Soal</button>
    </div>
  </div>
</form>

<?= $this->endSection(); ?>