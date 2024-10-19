<?php

if(isset($_FILES['files'])) {

    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif"); // ekstensi gambar yang diizinkan
    $max_size = 2097152; // ukuran maksimum 2MB per file

    for ($key = 0; $key < count($_FILES['files']['name']); $key++) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];

        // get ekstensi file
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi
        if(!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Ekstensi file $file_name tidak diizinkan. Hanya JPG, JPEG, PNG, atau GIF yang diperbolehkan.";
            continue;
        }

        // Validasi ukuran file
        if($file_size > $max_size) {
            $errors[] = "Ukuran file $file_name melebihi batas maksimum 2MB.";
            continue;
        }

        // Pindahkan file jika tidak ada error
        if(empty($errors)) {
            if(!file_exists("imagesUpload")) {
                mkdir("imagesUpload", 0777, true); // Buat folder jika belum ada
            }
            move_uploaded_file($file_tmp, "imagesUpload/".$file_name);
            echo "<img src='imagesUpload/$file_name' alt='' width='50px'> <br>";
        }
    }

    // Tampilkan pesan error atau sukses
    if(empty($errors)) {
        echo "Semua file berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }

}


