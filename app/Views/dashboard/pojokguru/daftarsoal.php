<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>

<h1>Daftar Soal</h1>

<table class="table w-100">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Soal</th>
      <th scope="col">Soal</th>
      <th scope="col">Pembuat Soal</th>
      <th scope="col" class="text-center">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>SPM21</td>
      <td style="width: 40%;">Pada suatu hari ada Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, esse!</td>
      <td>Lilis Suharti, S.Pd.</td>
      <td>
        <a href="editmateri/51613" class="btn btn-sm btn-success mb-2" style="width: 100%;">Ubah </a>
        <form action="pojokguru/hapusmateri" class="">
          <input type="submit" value="Hapus" class="btn btn-sm btn-danger" style="width: 100%;">
        </form>
      </td>
    </tr>
  </tbody>
</table>

<?= $this->endSection();; ?>