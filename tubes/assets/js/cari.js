const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.isi');
tombolCari.style.display = 'none';

keyword.addEventListener('keyup', function () {
  // ajak

  //fetch()

  fetch('php/konten-cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});
