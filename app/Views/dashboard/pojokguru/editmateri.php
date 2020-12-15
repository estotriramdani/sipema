<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Edit Materi #<?= $kode_materi; ?></h1>

<div class="konten-tambahmateri">
  <form action=<?= base_url("materi/save/$kode_materi"); ?> method="post">
    <div class="form-group row">
      <label for="kode_materi" class="col-sm-2 col-form-label">Kode Materi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="kode_materi" name="kode_materi" value="<?= (old('kode_materi')) ? old('kode_materi') : $kode_materi; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama_materi" name="nama_materi" value="<?= (old('nama_materi')) ? old('nama_materi') : $nama_materi; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Materi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $deskripsi; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="judul_materi" class="col-sm-2 col-form-label">Judul Materi</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="judul_materi" name="judul_materi" value="<?= (old('judul_materi')) ? old('judul_materi') : $judul_materi; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="isi_materi" class="col-sm-2 col-form-label">Isi Materi</label>
      <div class="col-sm-10">
        <textarea name="isi_materi" class="form-control editor"><?= (old('isi_materi')) ? old('isi_materi') : $isi_materi; ?></textarea>
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

<?= $this->endSection(); ?>