console.log('test');

const tambahmateri = `
      <h2>Tambah Materi</h2>
      <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Materi</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
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
      </form>`;

// $('.tambahmateri').click(function(){
//   $('.konten').html(tambahmateri);
// });

$('.konten-tambahmateri').fadeOut();

$('.tambahmateri').click(function(){
  $('.konten-tambahmateri').fadeIn();
  $('.konten-tambahsoal').fadeOut();
});

$('.konten-tambahsoal').fadeOut();

$('.tambahsoal').click(function(){
  $('.konten-tambahsoal').fadeIn();
  $('.konten-tambahmateri').fadeOut();
});