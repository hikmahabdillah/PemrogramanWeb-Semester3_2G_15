<?php
// Ambil nilai username dan password dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password benar
if ($username == "admin" && $password == "1234") {
    // Jika benar, mulai sesi dan simpan data pengguna
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";

    // Tampilkan pesan sukses dan link ke halaman home
    echo "Anda berhasil login. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    // Jika salah, tampilkan pesan gagal dan link ke halaman login
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>