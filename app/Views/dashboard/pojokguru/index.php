<?= $this->extend('layout/template-dashboard'); ?>

<?= $this->section('content'); ?>
<h1>Pojok Guru</h1>

<div class="row">
  <div class="col-sm-12">
    <div class="row">

      <div class="col-sm-4 mb-3">
        <a class="tambahmateri">
          <div class="card">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-12">
                  <h5 class="card-title">Tambah Materi</h5>
                  <h6 class="card-subtitle mb-2">Tambah materi sesuai keahlian Anda</h6>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 mb-3">
        <a class="tambahsoal">
          <div class="card">
            <div class="card-body">
              <div class="row text-center">
                <div class="col-12">
                  <h5 class="card-title">Buat Soal</h5>
                  <h6 class="card-subtitle mb-2">Buat soal sesuai materi yang Anda telah buat</h6>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-3">

      </div>

    </div>

    <div class="konten-tambahmateri">
      <h3>Tambah Materi</h3>
      <form>
        <div class="form-group row">
          <label for="nama_materi" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="nama_materi" name="nama_materi">
          </div>
        </div>
        <div class="form-group row">
          <label for="deskripsi_materi" class="col-sm-2 col-form-label">Deskripsi Materi</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="deskripsi_materi" name="deskripsi_materi">
          </div>
        </div>
        <div class="form-group row">
          <label for="isimateri" class="col-sm-2 col-form-label">Isi Materi</label>
          <div class="col-sm-10">
            <textarea name="isimateri" class="form-control editor"></textarea>
          </div>
        </div>

        <input type="hidden" value="<?= $email; ?>">

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-mulai">Tambah Materi</button>
          </div>
        </div>
      </form>
    </div>

    <div class="konten-tambahsoal">
      <h3>Tambah Soal</h3>
      <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Pilih materi</option>
              <option>Nanti ini dilooping dari tabel materi</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select> </div>
        </div>
        <div class="form-group row">
          <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
          <div class="col-sm-10">
            <textarea name="pertanyaan" class="form-control editor-tambahsoal"></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="pilihan_1">Pilihan 1</label>
            <input type="text" class="form-control" id="pilihan_1" name="pilihan_1">
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_2">Pilihan 2</label>
            <input type="text" class="form-control" id="pilihan_2" name="pilihan_2">
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_3">Pilihan 3</label>
            <input type="text" class="form-control" id="pilihan_3" name="pilihan_3">
          </div>
          <div class="form-group col-md-3">
            <label for="pilihan_4">Pilihan 4</label>
            <input type="text" class="form-control" id="pilihan_4" name="pilihan_4">
          </div>
        </div>

        <div class="form-group row">
          <label for="jawaban" class="col-sm-2 col-form-label">Kunci</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="jawaban" name="jawaban">
          </div>
        </div>

        <input type="hidden" value="<?= $email; ?>">

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-mulai">Tambah Soal</button>
          </div>
        </div>
      </form>
    </div>



    <script>
      ClassicEditor
        .create(document.querySelectorAll('.editor')[0])
        .then(editor => {
          console.log(editor);
        })
        .catch(error => {
          console.error(error);
        });

      ClassicEditor
        .create(document.querySelector('.editor-tambahsoal'))
        .then(editor => {
          console.log(editor);
        })
        .catch(error => {
          console.error(error);
        });
    </script>



    <?= $this->endSection(); ?>