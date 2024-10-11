<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $errors = array();

  // Validasi Nama
  if (empty($nama)) {
    $errors[] = "Nama harus diisi.";
  }

  // validasi password
  if (empty($password)) {
    $errors[] = "password harus diisi.";
  }
  if(!empty($password) && strlen($password) < 8){
    $errors[] = "password minimal harus 8 karakter";
  }

  // Validasi Email
  if (empty($email)) {
    $errors[] = "Email harus diisi.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
  }

  if (empty($errors)) {
    // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
    // Misalnya, menyimpan data ke database atau mengirim email
    echo "Data berhasil dikirim: Nama = $nama, Email = $email";
  }
}
