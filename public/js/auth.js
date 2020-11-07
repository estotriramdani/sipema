


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