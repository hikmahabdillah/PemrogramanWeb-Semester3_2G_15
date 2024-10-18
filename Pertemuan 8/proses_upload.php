<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "imagesUpload/";

$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
  mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
  $totalFiles = count($_FILES['files']['name']);

  // Loop melalui semua file yang diunggah
  for ($i = 0; $i < $totalFiles; $i++) {
    $fileName = $_FILES['files']['name'][$i];
    $targetFile = $targetDirectory . $fileName;
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    // Validasi ekstensi file
    if (in_array($fileExtension, $allowedExtensions)) {
      $targetFile = $targetDirectory . $fileName;
      // Pindahkan file yang diunggah ke direktori penyimpanan
      if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
        echo "<img src='imagesUpload/$fileName' alt='' width='50px'> <br>"; // menampilkan gambar
        echo "File $fileName berhasil diunggah.<br>";
      } else {
        echo "Gagal mengunggah file $fileName.<br>";
      }
    }
  }
} else {
  echo "Tidak ada file yang diunggah.";
}
