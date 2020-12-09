let score = 0;
let jawaban = document.getElementsByTagName('input');

function displayResult(value) {
  // console.log(value)
  if (value == "true") {
    score++;
  } else if (value == "false") {
    if (score == 0) {
      score = 0
    } else if (score > 0) {
      score = score - 1;
    }
  }
  console.log(score)
}

let jumlahSoal = document.querySelectorAll('.pertanyaan').length;

console.log(jumlahSoal.length)

let hitungSkor = document.getElementById('hitungSkor');

let questionWrapper = document.getElementById('question-wrapper');
let nilaiCard = document.getElementById('nilai-card');
nilaiCard.style.display = 'none'


let nilaiKuis = document.getElementById('nilai-kuis');

hitungSkor.addEventListener("click", function () {
  questionWrapper.style.display = 'none';
  nilaiCard.style.display = 'block';
  let nilaiAkhir = (score / jumlahSoal) * 100;
  nilaiKuis.innerHTML = nilaiAkhir.toFixed(0);
  if (nilaiAkhir > 80) {
    nilaiKuis.style.color = 'green';
    nilaiKuis.style.fontWeight = 'bold';
  } else if (nilaiAkhir < 80 && nilaiAkhir > 50) {
    nilaiKuis.style.fontWeight = 'bold';
    nilaiKuis.style.color = 'yellow';
  } else if (nilaiAkhir < 50) {
    nilaiKuis.style.fontWeight = 'bold';
    nilaiKuis.style.color = 'red';
  }
  console.log(nilaiAkhir)
})
