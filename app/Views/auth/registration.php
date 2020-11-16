<?= $this->extend('layout/template-auth'); ?>

<?= $this->section('content'); ?>

<div class="owl-carousel wow"></div>

<div class="container mb-5 p-2">
  <div class="container regis-wrapper shadow-lg bg-light">
    <div class="row">
      <div class="col-sm-4">
        <h1>Daftar SIPEMA</h1>

        <!-- nanti alert ini dicut ke controller -->
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
          Pendaftaran berhasil!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->

        <!-- daftar sebagai -->


      </div>
      <div class="col-sm-6">
        <!-- <p class="text-right d-none d-xl-block" style="position: relative; bottom: 20%; "><b>O</b></p> -->
        <div class="mb-4 ml-1">
          <h5>Daftar Sebagai</h5>
          <div class="form-check form-check-inline">
            <input class="form-check-input ganti-siswa" type="radio" name="inlineRadioOptions" id="inlineRadio1" checked value="option1">
            <label class="form-check-label" for="inlineRadio1">Siswa</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input ganti-guru" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Guru</label>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-6 ">
        <!-- buat form processing lakukannya di controller registrationAction() terus nanti dikasih redirect 
        langsung ke halaman login kalo pendaftaran berhasil -->
        <!-- //= $validation->listErrors() ?> -->
        <?= $validation->listErrors() ?>

        <form method="POST" action="/auth/registrationAction">
          <?= csrf_field(); ?>
          <div class="form-group">
            <label for="exampleInputEmail1" class="kode_identitas">NIS (Nomor Induk Siswa)</label>
            <input type="text" class="form-control" name="kode_identitas" id="" aria-describedby="emailHelp" autofocus>
          </div>
          <div class="form-group">
            <label for="">Nama <span class="nama">Siswa</span></label>
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio3" value="Laki-laki">
            <label class="form-check-label" for="inlineRadio3">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline mb-3">
            <input class=" form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio4" value="Perempuan">
            <label class="form-check-label" for="inlineRadio4">Perempuan</label>
          </div>
          <div class="form-group">
            <label for="">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" type="date" id="start" name="tanggal_lahir" min="1970-01-01" max="2020-12-31">
          </div>
          <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="alamat lengkap." rows="3"></textarea>
          </div>
          <!-- value hidden bakal berubah ketika user klik daftar sebagai guru -->
          <input type="hidden" value="3" name="role_id" class="roleId">
          <input type="submit" class="btn btn-mulai text-white roles" value="Daftar Sebagai Siswa">
        </form>
      </div>
      <div class="col-sm-6">
        <div class="gambar-regis">
          <img src="/img/student.png" alt="" class="img-fluid">
        </div>
        <div class="mt-3" style="text-align: center;">
          <a href="../../" class="btn-mulai shadow-sm posisi-tombol">Beranda</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="../js/regis.js"></script>


<?= $this->endSection() ?>