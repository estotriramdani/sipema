<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Materi</h1>

<form action="/materi" style="width: 300px;">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Materi</label>
    <select class="form-control" name="materi">
      <option>Pilih materi</option>
      <option name="materi" value="bangundatar" <?php if ($_GET['materi'] == 'bangundatar') {
                                                  echo "selected";
                                                } ?>>Bangun Datar</option>
      <option name="materi" value="himpunan" <?php if ($_GET['materi'] == 'himpunan') {
                                                echo "selected";
                                              } ?>>Himpunan</option>
      <option name="materi" value="persamaan" <?php if ($_GET['materi'] == 'persamaan') {
                                                echo "selected";
                                              } ?>>Persamaan dan Persamaan</option>
    </select>
  </div>
  <button type="submit" class="btn btn-mulai">Pilih</button>

</form>


<?= $this->endSection(); ?>

<?php


if ($_GET['materi'] == 'bangundatar') {
  echo $this->include('dashboard/materi/bangundatar');
}
// echo $this->include('dashboard/materi/himpunan');


?>