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
                <a class="btn-materi buton  shadow-sm" href="#materi">Lihat Materi</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 hide-img-top">
          <img src="img/1x/Asset5.png" alt="" class="img-top image">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- section materi -->
<div style="height: 150px; overflow: hidden;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,74.7C480,53,600,75,720,80C840,85,960,75,1080,69.3C1200,64,1320,64,1380,64L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
</div>
<section id="materi" class="bg-light">

  <div class="container wow fadeInUp">
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
  <div class="container wow fadeInUp mb-4">
    <div class="row">
      <div class="col-sm-6">
        <img src="/img/1x/Asset1.png" class="img-fluid" alt="">
      </div>
      <div class="col-sm-6">
        <p>
          <h5>Bangun Datar</h5>
          Bangun datar senantiasa kita temui di kehidupan sehari-hari. Ubin, penggaris, layar televisi, hingga buku-buku
          pelajaran merupakan contoh dari bangun datar dalam berbagai bentuknya.
        </p>
      </div>
    </div>
  </div>

  <!-- materi 2 himpunan -->
  <div class="container wow fadeInUp mb-4">
    <div class="row">
      <div class="col-sm-6">
        <img src="/img/1x/Asset2.png" class="img-fluid" alt="">
      </div>
      <div class="col-sm-6">
        <p>
          <h5>Himpunan</h5>
          Sifat dalam materi himpunan dalam matematika tidak hanya digunakan
          pada materi SMP saja, melainkan <i>sifat</i> materi himpunan akan terus digunakan bahkan sampai tingkat pendidikan tinggi.
        </p>
      </div>
    </div>
  </div>

  <!-- materi 2 Pertidaksamaan -->
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-sm-6">
        <img src="/img/1x/Asset3.png" class="img-fluid" alt="">
      </div>
      <div class="col-sm-6">
        <p>
          <h5>Persamaan dan Pertidaksamaan</h5>
          Tidak sedikit hal di sekitar kita yang memliki persamaan terhadap satu sama lain. Tidak sedikit pula hal yang sering kita jumpai
          memiliki perbedaan baik yang mencolok maupun tidak antara satu dengan yang lainnya. Materi ini dapat membawa kita memahami hal tersebut!
        </p>
      </div>
    </div>
  </div>

</section>
<div style="height: 150px; overflow: hidden;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,74.7C480,53,600,75,720,80C840,85,960,75,1080,69.3C1200,64,1320,64,1380,64L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>
</div>
<!-- akhri section materi -->
<section id="kerjasama">
  <div class="container">
    <h1 class="subtittle-landing">Kerjasama</h1>
  </div>

</section>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>




<?= $this->endSection(); ?>