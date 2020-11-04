<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="jumbo-wrapper">
      <div class="row">
        <div class="col-sm-6 mt-5">
          <div class="row">
            <div class="col-sm-10">
              <h1 class="display-4">
                SIPEMA <br> SMP
              </h1>
              <p class="desc-top">
                Simulasi Pembelajaran Matematika Sekolah Menengah Pertama <br> Belajar menyenangkan bersama SIPEMA SMP
              </p>
              <div class="tombol-grup">
                <a class="btn-mulai buton shadow-sm" onclick="alert('nanti diarahkan ke dashboard, kalo belum login (belum ada session) diarahkan ke login')" href="#">Mulai</a>
                <a class="btn-materi buton  shadow-sm" onclick="alert('nanti scroll ke bawah yg isinya daftar materi tersedia, nunggu dari analis passing materinya.')" href="#">Lihat Materi</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 hide-img-top">
          <img src="img/object-top.png" alt="" class="img-top image">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section materi -->
<section id="materi" class="hide">
  <div class="container">
    <h1 class="subtittle-landing">Materi</h1>

    <div class="row justify-content-center">
      <div class="col-sm-4">
        <p class="desc-subtittle">
          Di bawah merupakan materi yang tersedia di SIPEMA*
        </p>
        <p style="opacity: 0.5; text-align: right; font-size: 0.5em;">*terakhir diperbarui 4/11/2020</p>
      </div>
    </div>
  </div>

  <!-- materi 1 bangun datar -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis iste voluptates, voluptas a sint natus at, iusto non dolor adipisci id architecto facilis tempore corporis temporibus, deleniti unde? Facere.
      </div>
      <div class="col-sm-6">
        <p>
          Bangun datar senantiasa kita temui di kehidupan sehari-hari. Ubin, penggaris, layar televisi, hingga buku-buku
          pelajaran merupakan contoh dari bangun datar dalam berbagai bentuknya. SIPEMA menghadirkan materi bangun datar untuk dipelajari
          dan tentunya diambil hikmahnya.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- akhri section materi -->

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<div id="kerjasama"></div>



<?= $this->endSection(); ?>