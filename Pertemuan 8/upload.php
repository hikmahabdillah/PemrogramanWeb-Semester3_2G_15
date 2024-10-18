<?php
if(isset($_POST["submit"])){
  $target_dir = "uploads/"; // Direktori tujuan untuk menyimpan file
  $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
  $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  $allowed_extensions = array("jpg", "jpeg", "png", "gif");
  $max_size = 5 * 1024 * 1024; // 5 MB

  if (in_array($file_type, $allowed_extensions) && $_FILES["myfile"]["size"] <= $max_size) {
    $namaFile = $_FILES["myfile"]["name"]; // untuk mendapatkan nama file yang telah diupload
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
      echo "<img src='uploads/$namaFile' alt='' width='200px'> <br>"; // menampilkan gambar
      echo "File berhasil diunggah.";
    } else {
      echo "Gagal mengunggah file.";
    }
  } else {
    echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
  }
}