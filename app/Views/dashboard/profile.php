<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1 class="tittle-dashboard">Laman Profile</h1>

<div class="row">
  <div class="col-sm-12 ">
    <!-- <img src="/img/default.jpg" class="align-self-start mr-3 profile-img-dashboard rounded-circle mx-auto d-block" alt="..."> -->
    <h4 class="mt-3 mb-5">Halo, <?= $nama; ?>!</h4>
  </div>
</div>

<div class="row mb-4">
  <div class="col-sm-6">
    <h4 class="mb-3">Profil lengkap</h4>
    <form action="/dashboard/updateprofil" method="post">
      <div class="form-group row">
        <label for="kode_identitas" class="col-sm-4 col-form-label">Kode Identitas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="kode_identitas" name="kode_identitas" value="<?= $kode_identitas; ?>" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
          <input type="text" class="form-control <?= ($validation->HasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $nama; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('nama') ?>
          </div>
        </div>
      </div>
      <div class="form-group row">

        <!-- Harusnya Radio -->

        <label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
            <option value="Laki-laki" <?php if ($jenis_kelamin == 'Laki-laki') {echo "selected";} ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') {echo "selected";} ?>>Perempuan</option>
          </select>
        </div>

      </div>
      <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control <?= ($validation->HasError('tempat_lahir')) ? 'is-invalid' : '' ?>" id="tempat_lahir" name="tempat_lahir" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $tempat_lahir; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('tempat_lahir') ?>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= (old('tanggal_lahir')) ? old('tanggal_lahir') : $tanggal_lahir; ?>" disabled>
          <div class="invalid-feedback">
            <?= $validation->getError('tanggal_lahir') ?>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="email" name="email" value="<?= (old('email')) ? old('email') : $email; ?>" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="alamat" class="col-sm-4 col-form-label">Alamat Lengkap</label>
        <div class="col-sm-8">
          <textarea name="alamat" class="form-control <?= ($validation->HasError('alamat')) ? 'is-invalid' : '' ?>"><?= (old('alamat')) ? old('alamat') : $alamat; ?> </textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('alamat') ?>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-materi">Ubah Profile</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-sm-6">
    <h4 class="mb-3">Ganti password</h4>
    <form action="/dashboard/updatepassword" method="post">
      <div class="form-group row">
        <label for="oldpassword" class="col-sm-4 col-form-label">Password Lama</label>
        <div class="col-sm-8">
          <input type="password" class="form-control <?= ($validation->HasError('oldpassword')) ? 'is-invalid' : '' ?>  " id="oldpassword" name="oldpassword">
          <div class="invalid-feedback">
            <?= $validation->getError('oldpassword') ?>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="newpassword" class="col-sm-4 col-form-label">Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control <?= ($validation->HasError('newpassword')) ? 'is-invalid' : '' ?>" id="newpassword" name="newpassword">
          <div class="invalid-feedback">
            <?= $validation->getError('newpassword') ?>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="newpasswordconfirm" class="col-sm-4 col-form-label">Ulangi Password Baru</label>
        <div class="col-sm-8">
          <input type="password" class="form-control <?= ($validation->HasError('newpasswordconfirm')) ? 'is-invalid' : '' ?>" id="newpasswordconfirm" name="newpasswordconfirm">
          <div class="invalid-feedback">
            <?= $validation->getError('newpasswordconfirm') ?>
          </div>
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





<div class="row">
  <div class="col-sm-6">

  </div>
</div>


<?= $this->endSection(); ?>