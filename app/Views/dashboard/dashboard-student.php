<?= $this->section('content'); ?>

<p> Halo, <?= $name; ?>! Kamu dikenali sebagai <?= $rolename; ?> di SIPEMA</p>
<div class="row">
  <div class="col-sm-7">
    <p>Di bawah merupakan daftar nilai kamu. </p>
    <p> Tenang, jika nilai kamu masih 0 (nol), ambil kuis sekarang juga dan jangan lupa dipelajari materinya terlebih dahulu, ya!</p>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <h5 class="card-title">Bangun Ruang</h5>
                <h6 class="card-subtitle mb-2">Materi #1</h6>
              </div>
              <div class="col-3">
                <h2 class="card-text text-right nilai">90</h2>
              </div>
            </div>
            <small>Niai maksimal 100</small>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <h5 class="card-title">Himpunan</h5>
                <h6 class="card-subtitle mb-2">Materi #2</h6>
              </div>
              <div class="col-3">
                <h2 class="card-text text-right nilai">90</h2>
              </div>
            </div>
            <small>Niai maksimal 100</small>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <h5 class="card-title">Persamaan dan Pertidaksamaan</h5>
                <h6 class="card-subtitle mb-2">Materi #3</h6>
              </div>
              <div class="col-3">
                <h2 class="card-text text-right nilai">90</h2>
              </div>
            </div>
            <small>Niai maksimal 100</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">

  </div>

</div>

<!-- ambil ujian -->

<p class="mt-4">Yuk, pelajari materi dan kerjakan kuisnya!</p>
<div class="row ">
  <div class="col-sm-3 mb-2">
    <a class="btn-mulai d-block text-center" style="width: 100%" href="/materi">Pelajari Materi</a>
  </div>
  <div class="col-sm-3">
    <a class="btn-mulai d-block text-center" style="width: 100%" href="/kuis">Ambil Kuis</a>
  </div>
</div>








<?= $this->endSection(); ?>