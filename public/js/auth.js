
// daftar
const daftar = `
    
    <p>Daftar Sekarang</p>
    <a href="auth/registration" class="btn-mulai">Daftar</a>
    <p class="mt-4"> Sudah memiliki akun? Masuk <a href="auth/login">di sini</a></p>

    `;
$('.daftar').on('click', function () {
    Swal.fire({
        title: '<strong>Daftar</strong>',
        icon: 'info',
        html: daftar,
        showCloseButton: true,
        showCancelButton: false,
        showConfirmButton: false,
        focusConfirm: false
    })
});

const loginForm = `
    <form action="#" style="text-align: left;">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn-mulai" style="border-color: white; box-shadow:0px;">Login</button>
    </form>
    <p class="mt-4"> Belum memiliki akun? Daftar gratis <a href="auth/registration">di sini</a></p>
    `;

$('.login').on('click', function () {
    Swal.fire({
        title: '<strong>Masuk</strong>',
        icon: 'info',
        html: loginForm,
        showCloseButton: true,
        showConfirmButton: false,
        focusConfirm: false
    })
});


// ganti laman registrasi
$('.ganti-guru').click(function () {
    $(".role").replaceWith(`<b style="font-weight: bold; transition: 1s;"><u>Guru</u></b>`);
    $(".kode_identitas").text(`NIP atau setara`);
    $(".nama").text(`Guru`);
    $("img").attr("src", null);
    $("img").attr("src", "/img/teacher.png");
    $(".gambar-regis").attr('style', 'position: relative; top: 15%;');
    $(".gambar-regis").addClass('img-muncul');
    $(".roleId").attr("value", "2");
    $(".roles").attr("value", "Daftar Sebagai Guru");
    alert('Silakan mendaftar sebagai guru');
});

$('.ganti-siswa').click(function () {
    $(".role").html(`<b style="font-weight: bold; transition: 1s;"><u>Siswa</u></b>`);
    $(".kode_identitas").text(`Nomor Induk Siswa`);
    $(".nama").text(`Siswa`);
    $("img").attr("src", null);
    $("img").attr("src", "/img/student.png");
    // $(".gambar-regis").attr('style', 'position: relative; top: 15%;');
    $(".gambar-regis").addClass('img-muncul');
    $(".roleId").attr("value", "3");
    $(".roles").attr("value", "Daftar Sebagai Siswa");
    alert('Silakan mendaftar sebagai siswa');
});