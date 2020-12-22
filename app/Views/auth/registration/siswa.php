<?= $this->extend('layout/template-auth'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="container regis-wrapper shadow">
    <div class="row">
      <div class="col-sm-6">
        <h1>Daftar Siswa SIPEMA</h1>

        <!-- nanti alert ini dicut ke controller -->
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Pendaftaran berhasil!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      </div>
      <div class="col-sm-6">
      </div>
    </div>
    <div class="row">

      <div class="col-sm-6 ">
        <!-- buat form processing lakukannya di controller siswaAction() terus nanti dikasih redirect 
        langsung ke halaman login kalo pendaftaran berhasil -->
        <form action="../../auth/siswaAction">
          <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" type="date" id="start" name="trip-start" min="1970-01-01" max="2020-12-31">
          </div>
          <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <!-- ini manggil input hidden di controller Auth::siswa() -->
          <?= $role; ?>
          <input type="submit" class="btn btn-mulai text-white" value="Daftar">
          <a href="../registration/guru" class="btn btn-materi daftar-sebagai-guru"> Daftar Sebagai Guru</a>
        </form>
      </div>
      <div class="col-sm-6">
        <div class="gambar-regis">
          <img src="/img/student.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="mt-3" style="text-align: center;">
      <a href="../../" class="btn-mulai shadow-sm posisi-tombol">Beranda</a>
    </div>
  </div>
</div>

<?= $this->endSection() ?>