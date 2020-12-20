<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Materi</h1>
<!-- flash message -->
<div>
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Materi</th>
      <th scope="col">Nama Materi</th>
      <th scope="col">Email Pemateri</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($materi as $m) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= $m->kode_materi; ?></td>
        <td><?= $m->nama_materi; ?></td>
        <td><?= $m->email; ?></td>
        <td>
          <a href="editmateri/<?= $m->kode_materi ?>" class="btn btn-sm btn-success">Ubah </a>
          <form action=<?= base_url("materi/delete/$m->kode_materi"); ?> class="d-inline">
            <input type="submit" value="hapus" class="btn btn-sm btn-danger">
          </form>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection();; ?>