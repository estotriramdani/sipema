const nilai = document.querySelector("input[name=nilaiKuis]");

console.log(nilai);

let score = 0;
let pertanyaan = document.getElementsByClassName(".pertanyaan");
let jawaban = document.getElementsByTagName("input");

function displayResult(value) {
  // console.log(value)
  if (value == "true") {
    score++;
    alert("Jawaban tersimpan, harap untuk tidak mengubah jawaban!");
  } else if (value == "false") {
    if (score == 0) {
      // score = 0;
      alert("Jawaban tersimpan, harap untuk tidak mengubah jawaban!");
    } else if (score > 0) {
      alert("Jawaban tersimpan, harap untuk tidak mengubah jawaban!");
    }
  }
  console.log(score);
}

// for (let i = 1; i < pertanyaan.length; i++) {
console.log(document.getElementById("pertanyaan-1"));
// }

let jumlahSoal = document.querySelectorAll(".pertanyaan").length;

let hitungSkor = document.getElementById("hitungSkor");

let questionWrapper = document.getElementById("question-wrapper");
let nilaiCard = document.getElementById("nilai-card");
nilaiCard.style.display = "none";

let kode_materi = document.getElementById("kode-materi");
let selesai = document.getElementById("selesai");

let nilaiKuis = document.getElementById("nilai-kuis");

hitungSkor.addEventListener("click", function () {
  questionWrapper.style.display = "none";
  nilaiCard.style.display = "block";
  let nilaiAkhir = (score / jumlahSoal) * 100 * 2;
  nilaiKuis.innerHTML = nilaiAkhir.toFixed(0);
  if (nilaiAkhir > 80) {
    nilaiKuis.style.color = "green";
    nilaiKuis.style.fontWeight = "bold";
    nilai.setAttribute("value", nilaiAkhir);
  } else if (nilaiAkhir < 80 && nilaiAkhir > 50) {
    nilaiKuis.style.fontWeight = "bold";
    nilaiKuis.style.color = "yellow";
    nilai.setAttribute("value", nilaiAkhir);
  } else if (nilaiAkhir < 50) {
    nilaiKuis.style.fontWeight = "bold";
    nilaiKuis.style.color = "red";
    nilai.setAttribute("value", nilaiAkhir);
  }
  console.log(nilaiAkhir);
});
