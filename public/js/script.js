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

    $('.btn-materi').on('click', function (e) {

        var tujuan = $(this).attr('href');

        var elemenTujuan = $(tujuan);

        $('html , body').animate({
            scrollTop: elemenTujuan.offset().top - 50
        });

        e.preventDefault();
    });

    //swal

    // daftar
    const daftar = `
    
    <p>Daftar sebagai</p>
    <a href="auth/registration/siswa" class="btn-mulai">Siswa</a>
    <a href="auth/registration/guru" class="btn-mulai mb-5">Guru</a>
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
    <p class="mt-4"> Belum memiliki akun? Daftar gratis <a href="auth/registration/siswa">di sini</a></p>
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


    // $('.login').on('click', function () {
    //     Swal.fire({
    //         title: '<strong>HTML <u>example</u></strong>',
    //         icon: 'info',
    //         html:
    //             'You can use <b>bold text</b>, ' +
    //             '<a href="//sweetalert2.github.io">links</a> ' +
    //             'and other HTML tags',
    //         showConfirmButton = false;
    //     })
    // });
});

const dark = document.querySelector('.tombol');
const jumbotron = document.querySelector('.jumbotron');
const descTop = document.querySelector('.desc-top');
const display4 = document.querySelector('.display-4');
const mulai = document.querySelectorAll('.buton');

dark.addEventListener('click', function () {
    document.body.classList.toggle('bg-dark');
    jumbotron.classList.toggle('bg-dark');
    document.body.classList.add('text-white');
    display4.classList.add('text-white');
    mulai[0].classList.add('bg-light');
    mulai[1].classList.add('bg-light');
    mulai[0].classList.add('text-dark');
    mulai[1].classList.add('text-dark');
    preventDefault();
})