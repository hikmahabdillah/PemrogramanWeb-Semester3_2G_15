<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title> </head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Mengambil nilai cookie
    $beliNovel = $_COOKIE["beliNovel"];
    $beliBuku = $_COOKIE["beliBuku"];

    // Menampilkan jumlah novel dan buku yang dibeli
    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>

</body>
</html>