$(document).ready(function () {


    //navbar fix

    function getPos() {
        var Pos = $(window).scrollTop();
        return Pos;
    }

    $(window).scroll(function () {

        if (getPos() > 50) {
            $('nav').addClass('navfix');
            $('nav').addClass('shadow-sm');
            $('nav').addClass('navbar-dark');
            $('nav').removeClass('bg-putih');
            $('nav').removeClass('p-4');
        } else if (getPos() < 50) {
            $('nav').removeClass('navfix');
            $('nav').removeClass('shadow-sm');
            $('nav').removeClass('navbar-dark');
            $('nav').addClass('bg-putih');
            $('nav').addClass('p-4');
        }

    });

    $(window).scroll(function () {
        if (getPos() > $('#materi').offset().top + 300) {
            $("#materi").removeClass("hide");
            $("#materi").addClass("section-muncul");
        }
    });


    //smooth scroll
    new ActiveMenuLink(".navbar", {

        // selector of menu item
        itemTag: "li",

        // active class
        activeClass: "active",

        // in pixels
        scrollOffset: 0,

        // duration in ms
        scrollDuration: 500,

        // easing function
        ease: "out-circ",

        // specifies the header height
        headerHeight: null,

        // string
        default: null,

        // shows hash tag
        showHash: false

    });
    //swal

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
        $(".role:eq(0)").replaceWith(`<b style="font-weight: bold; transition: 1s;"><u>Guru</u></b>`);
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
        $(".role:eq(0)").replaceWith(`<b style="font-weight: bold; transition: 1s;"><u>Siswa</u></b>`);
        $(".kode_identitas").text(`Nomor Induk Siswa`);
        $(".nama").text(`Siswa`);
        $("img").attr("src", null);
        $("img").attr("src", "/img/teacher.png");
        // $(".gambar-regis").attr('style', 'position: relative; top: 15%;');
        $(".gambar-regis").addClass('img-muncul');
        $(".roleId").attr("value", "3");
        $(".roles").attr("value", "Daftar Sebagai Siswa");
        alert('Silakan mendaftar sebagai siswa');
    });
});

// const dark = document.querySelector('.tombol');
// const jumbotron = document.querySelector('.jumbotron');
// const descTop = document.querySelector('.desc-top');
// const display4 = document.querySelector('.display-4');
// const mulai = document.querySelectorAll('.buton');

// dark.addEventListener('click', function () {
//     document.body.classList.toggle('bg-dark');
//     jumbotron.classList.toggle('bg-dark');
//     document.body.classList.add('text-white');
//     display4.classList.add('text-white');
//     mulai[0].classList.add('bg-light');
//     mulai[1].classList.add('bg-light');
//     mulai[0].classList.add('text-dark');
//     mulai[1].classList.add('text-dark');
//     preventDefault();
// })