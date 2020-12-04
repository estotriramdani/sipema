<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Materi</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Materi</th>
      <th scope="col">Nama Materi</th>
      <th scope="col">Pembuat Materi</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>SPM21</td>
      <td>Bangun Datar</td>
      <td>Lilis Suharti, S.Pd.</td>
      <td>
        <a href="editmateri/51613" class="btn btn-sm btn-success">Ubah </a>
        <form action="pojokguru/hapusmateri" class="d-inline">
          <input type="submit" value="hapus" class="btn btn-sm btn-danger">
        </form>
      </td>
    </tr>
  </tbody>
</table>

<?= $this->endSection();; ?>