$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

let namaKuis = document.querySelectorAll(".nama-kuis");
for (let i = 0; i < namaKuis.length; i++) {
  if (namaKuis[i].innerHTML.length > 17) {
    namaKuis[i].innerHTML = namaKuis[i].innerHTML.substr(0, 17) + " ...";
  }
}
