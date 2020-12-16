<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Soal</h1>
<div class="dropdown">
  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Kuis
  </a>
  <div class="dropdown-menu" aria-labelledby=" dropdownMenuLink">
    <?php foreach ($materi as $m) : ?>
      <a class="dropdown-item" href="/kuis?kode_materi=<?= $m->kode_materi; ?>&nama_materi=<?= $m->nama_materi; ?>"><?= $m->nama_materi; ?></a>
    <?php endforeach; ?>
  </div>
</div>

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
    <?php foreach ($soal as $s) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $s->kode_materi . "/" . $s->id_soal; ?></td>
        <td style="width: 40%;"><?= $s->pertanyaan; ?></td>
        <td><?= $s->jawaban; ?></td>
        <td>
          <a href="editsoal/<?= $s->id_soal; ?>" class="btn btn-sm btn-success mb-2" style="width: 100%;">Ubah </a>
          <form action=<?= base_url("soal/delete/$s->id_soal"); ?> class="d-inline">
            <input type="submit" value="hapus" class="btn btn-sm btn-danger" style="width: 100%;">
          </form>
          <!-- <form action=<?= base_url("soal/delete/<?= $s->id_soal"); ?> class="">
            <input type="submit" value="Hapus" class="btn btn-sm btn-danger" style="width: 100%;">
          </form> -->
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection();; ?>