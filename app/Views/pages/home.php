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
                <a class="btn-mulai buton shadow-sm" href="/dashboard">Mulai</a>
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
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <img src="/img/1x/Asset1.png" class="img-fluid mx-auto d-block" alt="">
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
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <img src="/img/1x/Asset2.png" class="img-fluid mx-auto d-block" alt="">
      </div>
      <div class="col-sm-6">
        <p>
          <h5>Himpunan</h5>
          Sifat dalam materi himpunan matematika tidak hanya digunakan
          pada materi SMP saja, melainkan <i>sifat</i> materi himpunan akan terus digunakan bahkan sampai tingkat pendidikan tinggi.
        </p>
      </div>
    </div>
  </div>

  <!-- materi 2 Pertidaksamaan -->
  <div class="container wow fadeInUp">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <img src="/img/1x/Asset3.png" class="img-fluid mx-auto d-block" alt="">
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

<!-- kerja sama -->
<section id="kerjasama">
  <div class="container">
    <h1 class="subtittle-landing wow fadeInDown">Kerjasama</h1>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-3">
        <img src="/img/1x/Asset5.png" class="img-fluid mx-auto d-block wow fadeInLeft" alt="">
      </div>
      <div class="col-sm-3 wow fadeInRight">
        <p class="mt-4">
          Anda seorang guru/pengajar? Mari bergabung untuk bersama-sama membangun SIPEMA menjadi lebih baik!
        </p>
        <p>Klik <a href="/auth/registration">di sini</a> untuk bergabung!</p>
      </div>
    </div>
  </div>

</section>
<!-- akhir kerjasama -->


<div style="height: 150px; overflow: hidden;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,213.3C384,181,480,107,576,106.7C672,107,768,181,864,186.7C960,192,1056,128,1152,133.3C1248,139,1344,213,1392,250.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
</div>

<!-- tentang -->
<section id="tentang" class="bg-light">
  <div class="container">
    <h1 class="subtittle-landing wow fadeInDown">Tentang</h1>
  </div>
  <div class="container">
    <p class="text-center wow fadeInLeft">SIPEMA dikembangkan oleh Mahasiswa Teknik Komputer SV IPB</p>
    <div class="owl-carousel">
      <div>
        <!-- juni -->
        <div class="row justify-content-center">
          <div class="col-sm-2 ">
            <img src="/img/profile-img/juni-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
          </div>
          <div class="col-sm-3 wow fadeInRight desc-profile">
            <p>
              <b>Project Manager</b>

            </p>
            <p>Juniawati Wahyu Lestari <br> J3D118069</p>
            <p style="font-style: italic;">"Masa Muda bekerja keras, Santai di masa tua."</p>
          </div>
        </div>
      </div>
      <!-- esto -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/esto-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>Front-end Developer</b>

          </p>
          <p>Esto Triramdani N <br> J3D118129</p>
          <p style="font-style: italic;">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, vero."</p>
        </div>
      </div>
      <!-- agung -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/agung-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>Back-end Developer</b>

          </p>
          <p>M. Agung Zuhdi <br> J3D118098</p>
          <p style="font-style: italic;">"Banyak belajar, biar bisa jadi orang."</p>
        </div>
      </div>
      <!-- end agung -->
      <!-- alif -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/alif-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>Data Analyst</b>

          </p>
          <p>Naufal Alif Falah <br> J3D118131</p>
          <p style="font-style: italic;">"Stop wishing. Start doing."</p>
        </div>
      </div>
      <!-- end alif -->
      <!-- andre -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/andre-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>System Analyst </b>

          </p>
          <p>Andre Alghifari C <br> J3D218184</p>
          <p style="font-style: italic;">"Kalah tampang gak masalah, yang penting menang saldo."</p>
        </div>
      </div>
      <!-- end andre -->
      <!-- fris -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/faris-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>Documenter</b>

          </p>
          <p>Muhammad Faris Rahthin R
            <br> J3D118123</p>
          <p style="font-style: italic;">"Kalau berani jangan takut-takut, kalau takut jangan berani berani."</p>
        </div>
      </div>
      <!-- end faris -->
      <!-- jiban -->
      <div class="row justify-content-center">
        <div class="col-sm-2 ">
          <img src="/img/profile-img/jiban-1.png" class="profile-img rounded-circle mx-auto d-block wow fadeInLeft" alt="">
        </div>
        <div class="col-sm-3 wow fadeInRight desc-profile">
          <p>
            <b>Tester </b>

          </p>
          <p>Fajar Mujiiban Achmad <br> J3D118073</p>
          <p style="font-style: italic;">"Do the best aja, soal hasil biar tuhan yang nentuin!!!"</p>
        </div>
      </div>
      <!-- end jiban -->
    </div>
  </div>
  </div>
</section>
<!-- akhir tentang -->

<div style="height: 200px; overflow: hidden;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,288L48,256C96,224,192,160,288,133.3C384,107,480,117,576,117.3C672,117,768,107,864,122.7C960,139,1056,181,1152,208C1248,235,1344,245,1392,250.7L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
  </svg>
</div>


<section id="invite">
  <div class="container">
    <a href="/auth/registration" target="_blank">
      <h2 class="invite-text">Yuk mulai belajar di SIPEMA!</h2>
    </a>
  </div>
</section>
<br><br>
<br><br>




<?= $this->endSection(); ?>