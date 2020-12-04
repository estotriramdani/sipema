<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Ubah Soal #<?= $kode_soal; ?></h1>

<form action="/soal/create" method="post">
  <div class="form-group row">
    <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
    <div class="col-sm-10">
      <select class="form-control" id="nama_materi" name="nama_materi">
        <option>Pilih materi</option>
        <option>Nanti ini dilooping dari tabel materi</option>
        <option>3</option>
        <option>Materi 1</option>
        <option>MTK011</option>
      </select> </div>
  </div>
  <div class="form-group row">
    <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
    <div class="col-sm-10">
      <textarea name="pertanyaan" class="form-control editor"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="pilihan_a">Pilihan A</label>
      <input type="text" class="form-control" id="pilihan_a" name="pilihan_a">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_b">Pilihan B</label>
      <input type="text" class="form-control" id="pilihan_b" name="pilihan_b">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_c">Pilihan C</label>
      <input type="text" class="form-control" id="pilihan_c" name="pilihan_c">
    </div>
    <div class="form-group col-md-3">
      <label for="pilihan_d">Pilihan D</label>
      <input type="text" class="form-control" id="pilihan_d" name="pilihan_d">
    </div>
  </div>

  <div class="form-group row">
    <label for="jawaban" class="col-sm-2 col-form-label">Kunci</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jawaban" name="jawaban">
    </div>
  </div>

  <input type="hidden" name="email" value="<?= $email; ?>">

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-mulai">Tambah Soal</button>
    </div>
  </div>
</form>

<?= $this->endSection(); ?>