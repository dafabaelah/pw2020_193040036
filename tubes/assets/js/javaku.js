// preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector('.input-gambar');
  const imgPreview = document.querySelector('.foto2');


  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}