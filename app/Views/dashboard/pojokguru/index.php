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
            <input type="text" class="form-control" id="kode_materi" name="kode_materi">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_materi" name="nama_materi">
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Materi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
          </div>
        </div>
        <div class="form-group row">
          <label for="judul_materi" class="col-sm-2 col-form-label">Judul Materi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul_materi" name="judul_materi">
          </div>
        </div>
        <div class="form-group row">
          <label for="isi_materi" class="col-sm-2 col-form-label">Isi Materi</label>
          <div class="col-sm-10">
            <textarea name="isi_materi" class="form-control editor"></textarea>
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
          <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <select class="form-control" id="nama_materi" name="kode_materi">
              <option>Pilih materi</option>
              <?php foreach ($materi->getResult() as $m) : ?>
                <option value="<?= $m->kode_materi; ?>" name="kode_materi"><?= $m->nama_materi; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
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
    </div>

    <?= $this->endSection(); ?>