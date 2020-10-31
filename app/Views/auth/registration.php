<?= $this->extend('layout/template-auth'); ?>

<?= $this->section('content'); ?>

<div class="container p-5 mb-5">
    <div class="container regis-wrapper shadow">
    <div class="row">
      <div class="col-sm-6">
        <h1>Daftar <span class="role">Siswa</span>  SIPEMA</h1>

        <!-- nanti alert ini dicut ke controller -->
        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
          Pendaftaran berhasil!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> -->

        <p>Ingin mendaftar sebagai guru? Klik  <span class="ganti">di sini</span></p>

      </div>
      <div class="col-sm-6">
        <p class="text-right d-none d-xl-block" style="position: relative; bottom: 20%; "><b>O</b></p>
      </div>
    </div>
    <div class="row">
      
      <div class="col-sm-6 ">
        <!-- buat form processing lakukannya di controller registrationAction() terus nanti dikasih redirect 
        langsung ke halaman login kalo pendaftaran berhasil -->
        <form action="../../auth/registrationAction">
          <div class="form-group">
            <label for="exampleInputEmail1" class="kode_identitas">NIS</label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp" autofocus  >
          </div>
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" id="" aria-describedby="emailHelp">
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1" value="L">
            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
          </div>
          <div class="form-check form-check-inline mb-2">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2" value="P">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" type="date" id="start" name="trip-start"
        min="1970-01-01" max="2020-12-31">
          </div>
          <div class="form-group">
            <label for="">Email address</label>
            <input type="email" class="form-control" id="" aria-describedby="emailHelp">
          </div> 
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" placeholder="alamat lengkap." rows="3"></textarea>
          </div>
          <!-- value hidden bakal berubah ketika user klik daftar sebagai guru -->
          <input type="hidden" value="3" name="role" class="roleId">
          <input type="submit" class="btn btn-mulai text-white roles" value="Daftar Sebagai Siswa">
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


<script type="text/javascript" src="../js/regis.js"></script>


<?= $this->endSection() ?>