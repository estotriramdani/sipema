<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1 class="tittle-dashboard">Laman Profile</h1>

<div class="row">
  <div class="col-sm-6 ">
    <!-- <img src="/img/default.jpg" class="align-self-start mr-3 profile-img-dashboard rounded-circle mx-auto d-block" alt="..."> -->
    <h4 class="text-center mt-3 mb-3">Halo, <?= $nama; ?>!</h4>
  </div>
</div>

<h4>Profil lengkap</h4>
<div class="row">
  <div class="col-sm-6">
    <form action="#" method="post">
      <div class="form-group row">
        <label for="kode_identitas" class="col-sm-4 col-form-label">Kode Identitas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="kode_identitas" name="kode_identitas" value="<?= $kode_identitas; ?>" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $jenis_kelamin; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $tempat_lahir; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="email" name="email" value="<?= $email; ?>" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
        <div class="col-sm-8">
          <textarea name="alamat" class="form-control"><?= $alamat; ?></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-materi">Ubah Profile</button>
        </div>
      </div>
    </form>
  </div>
</div>




<h4>Ganti password</h4>
<div class="row">
  <div class="col-sm-6">
    <form>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Password Lama</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-4 col-form-label">Ulangi Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-materi">Ubah password</button>
        </div>
      </div>
    </form>
  </div>
</div>


<?= $this->endSection(); ?>