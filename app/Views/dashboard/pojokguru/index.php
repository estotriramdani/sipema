<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>
<h1>Pojok Guru</h1>

<?php if (session()->getFlashdata('message')) : ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('message'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<div class="row">
  <div class="col-sm-12">
    <div class="row">

      <div class="col-sm-4 mb-3">
        <a class="tambahmateri">
          <div class="card card-tambahmateri">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-12">
                  <h5 class="card-title">Tambah Materi</h5>
                  <h6 class="card-subtitle mb-2">Tambah materi sesuai keahlian Anda</h6>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 mb-3">
        <a class="tambahsoal">
          <div class="card card-tambahsoal">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-12">
                  <h5 class="card-title">Buat Soal</h5>
                  <h6 class="card-subtitle mb-2">Buat soal sesuai materi yang Anda telah buat</h6>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-3">

      </div>

    </div>

    <div class="konten-tambahmateri">
      <h3>Tambah Materi</h3>
      <form action="/materi/create" method="post">
        <div class="form-group row">
          <label for="kode_materi" class="col-sm-2 col-form-label">Kode Materi</label>
          <div class="col-sm-10">
            <input type="text" value="<?= (old('kode_materi')) ? old('kode_materi') : "" ?>" class=" form-control <?= ($validation->HasError('kode_materi')) ? 'is-invalid' : '' ?>" id="kode_materi" name="kode_materi">
            <div class="invalid-feedback">
              <?= $validation->getError('kode_materi') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <input type="text" value="<?= (old('nama_materi')) ? old('nama_materi') : "" ?>" class="form-control <?= ($validation->HasError('nama_materi')) ? 'is-invalid' : '' ?>" id="nama_materi" name="nama_materi">
            <div class="invalid-feedback">
              <?= $validation->getError('nama_materi') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Materi</label>
          <div class="col-sm-10">
            <input type="text" value="<?= (old('deskripsi')) ? old('deskripsi') : "" ?>" class="form-control <?= ($validation->HasError('deskripsi')) ? 'is-invalid' : '' ?>" id="deskripsi" name="deskripsi">
            <div class="invalid-feedback">
              <?= $validation->getError('deskripsi') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="isi_materi" class="col-sm-2 col-form-label">Isi Materi</label>
          <div class="col-sm-10">
            <textarea name="isi_materi" class="form-control editor <?= ($validation->HasError('isi_materi')) ? 'is-invalid' : '' ?>"><?= (old('isi_materi')) ? old('isi_materi') : "" ?></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('isi_materi') ?>
            </div>
          </div>
        </div>

        <input type="hidden" name=email value="<?= $email; ?>">

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-mulai">Tambah Materi</button>
          </div>
        </div>
      </form>
    </div>

    <div class="konten-tambahsoal">
      <h3>Tambah Soal</h3>
      <form action="/soal/create" method="post">
        <div class="form-group row">
          <label for="kode_materis" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <select class="form-control <?= ($validation->HasError('kode_materis')) ? 'is-invalid' : '' ?>" id="kode_materis" name="kode_materis">
              <option value="">Pilih materi</option>
              <?php foreach ($materi as $m) : ?>
                <option value="<?= $m->kode_materi; ?>" name="kode_materis"><?= $m->nama_materi; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
          <div class="col-sm-10">
            <textarea name="pertanyaan" class="form-control editor <?= ($validation->HasError('pertanyaan')) ? 'is-invalid' : '' ?>"><?= (old('pertanyaan')) ? old('pertanyaan') : "" ?></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('pertanyaan') ?>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="pilihan_a">Pilihan A</label>
            <input type="text" value="<?= (old('pilihan_a')) ? old('pilihan_a') : "" ?>" class="form-control <?= ($validation->HasError('pilihan_a')) ? 'is-invalid' : '' ?>" id="pilihan_a" name="pilihan_a">
            <div class="invalid-feedback">
              <?= $validation->getError('pilihan_a') ?>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_b">Pilihan B</label>
            <input type="text" value="<?= (old('pilihan_b')) ? old('pilihan_b') : "" ?>" class="form-control <?= ($validation->HasError('pilihan_b')) ? 'is-invalid' : '' ?>" id="pilihan_b" name="pilihan_b">
            <div class="invalid-feedback">
              <?= $validation->getError('pilihan_b') ?>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_c">Pilihan C</label>
            <input type="text" value="<?= (old('pilihan_c')) ? old('pilihan_c') : null ?>" class="form-control <?= ($validation->HasError('pilihan_c')) ? 'is-invalid' : '' ?>" id="pilihan_c" name="pilihan_c">
            <div class="invalid-feedback">
              <?= $validation->getError('pilihan_c') ?>
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_d">Pilihan D</label>
            <input type="text" value="<?= (old('pilihan_d')) ? old('pilihan_d') : null ?>" class="form-control <?= ($validation->HasError('pilihan_d')) ? 'is-invalid' : '' ?>" id="pilihan_d" name="pilihan_d">
            <div class="invalid-feedback">
              <?= $validation->getError('pilihan_d') ?>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label for="jawaban" class="col-sm-4 col-form-label">Jawaban</label>
          <div class="col-sm-8">
            <select name="jawaban" id="jawaban" class="form-control <?= ($validation->HasError('jawaban')) ? 'is-invalid' : '' ?>">
              <option>Pilih jawaban</option>
              <option value="a" <?php if (old('jawaban') == 'a') {
                                  echo "selected";
                                } ?>>A</option>
              <option value="b" <?php if (old('jawaban') == 'b') {
                                  echo "selected";
                                } ?>>B</option>
              <option value="c" <?php if (old('jawaban') == 'c') {
                                  echo "selected";
                                } ?>>C</option>
              <option value="d" <?php if (old('jawaban') == 'd') {
                                  echo "selected";
                                } ?>>D</option>
            </select>
            <div class="invalid-feedback">
              <?= $validation->getError('jawaban') ?>
            </div>
          </div>
        </div>

        <input type="hidden" name="email" value="<?= $email; ?>">

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-mulai">Tambah Soal</button>
          </div>
        </div>
      </form>
    </div>

    <?= $this->endSection(); ?>