$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});


//akfikan jenis page pada halaman
let lokasi = $(location).attr('pathname'); // return : /forumsk/index.php
let res = lokasi.substr(1);
console.log(res);

var active = document.getElementById(res);
active.classList.add("active-page");

sessionStorage.setItem("lastname", "Smith");
sessionStorage.setItem("lastname", "John");
document.getElementById("result").innerHTML = sessionStorage.getItem("lastname");
