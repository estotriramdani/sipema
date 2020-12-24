<?= $this->section('content'); ?>


<p> Halo, <?= $nama; ?>! Kamu dikenali sebagai <?= $role_name; ?> di SIPEMA</p>
<div class="row">
  <div class="col-sm-7">
    <p>Di bawah merupakan daftar kontribusi Anda di SIPEMA. </p>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 mb-3">
        <a href="">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <h5 class="card-title">Jumlah Materi Dibuat</h5>
                  <h6 class="card-subtitle mb-2">Terakhir diperbarui hari ini (<?= date("d/m/Y"); ?>).</h6>
                </div>
                <div class="col-3">
                  <h2 class="card-text text-right nilai"><?= $jumlahmaterianda ?></h2>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <h5 class="card-title">Jumlah Soal Dibuat</h5>
                <h6 class="card-subtitle mb-2">Terakhir diperbarui hari ini (<?= date("d/m/Y"); ?>)</h6>
              </div>
              <div class="col-3">
                <h2 class="card-text text-right nilai"><?= $jumlahsoal ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-3">

  </div>

</div>

<?php if ($tblnilai != null) { ?>
  <h3>Daftar Nilai Siswa SIPEMA</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIS Siswa</th>
        <th scope="col">Kode Materi</th>
        <th scope="col">Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1 ?>
      <?php foreach ($tblnilai as $t) { ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><?= $t->kode_identitas ?></td>
          <td><?= $t->kode_materi ?></td>
          <td><?= $t->nilai ?></td>
        </tr>
      <?php $i++;
      } ?>
    </tbody>
  </table>
<?php } ?>

<!-- ambil ujian -->

<p class="mt-4">Yuk, berkontribusi di SIPEMA! Meluncur ke Pojok Guru!</p>
<div class="row ">
  <div class="col-sm-3 mb-2">
    <a class="btn-mulai d-block text-center" style="width: 100%" href="/pojokguru">Pojok Guru</a>
  </div>
</div>








<?= $this->endSection(); ?>