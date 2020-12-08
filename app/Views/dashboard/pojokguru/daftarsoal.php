<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Soal</h1>

<table class="table w-100">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Materi/Soal</th>
      <th scope="col">Soal</th>
      <th scope="col">Kunci Jawaban</th>
      <th scope="col" class="text-center">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($soal->getResult() as $s) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $s->kode_materi . "/" . $s->id_soal; ?></td>
        <td style="width: 40%;"><?= $s->pertanyaan; ?></td>
        <td><?= $s->jawaban; ?></td>
        <td>
          <a href="editsoal/51613" class="btn btn-sm btn-success mb-2" style="width: 100%;">Ubah </a>
          <form action="pojokguru/hapusmateri" class="">
            <input type="submit" value="Hapus" class="btn btn-sm btn-danger" style="width: 100%;">
          </form>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection();; ?>