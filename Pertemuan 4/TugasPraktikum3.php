<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cerita Praktikum 3</title>
</head>

<style>
    body{
      font-family: Arial;
    }
    .container {
        display: flex;
        margin: 20px auto;
        border-radius: 10px;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15), 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 10px 20px;
      border: 1px solid #ddd;
      max-width: max-content;
    }
    td {
        padding: 5px;
    }
    .box{
      border-radius: 10px;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15), 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 10px 20px;
      border: 1px solid #ddd;
    }
    header {
        display: flex;
        justify-content: center;
    }
    .keterangan, .sold, .avaliable {
        display: flex;
        justify-content: center;
        margin-top: 50px;
        margin: 20px;
    }
    .keterangan > div{
      gap: 10px;
      align-items: center;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
      padding: 10px 20px;
      border: 1px solid #ddd;
    }
    .persentase {
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>

<body>
    <?php
    $allKursi = 45;
    $soldKursi = 28;
    $sisaKursi = $allKursi - $soldKursi;
    $percentage = $sisaKursi / $allKursi * 100;
    ?>
    <header>
        <h1>Particle Resto</h1>
    </header>
    <div class="container">
        <table>
            <?php
            $count = 1;
            $image ="";
            for ($i = 0; $i < 5; $i++) { ?>
                <tr>
                    <?php
                    for ($j = 0; $j < 9; $j++) {
                        $count <= $soldKursi ? $image='kursi.png': $image='kursikosong.png';
                    ?>
                        <td>
                            <img src=<?php echo"{$image}"?> alt="" width="50px" height="50px">
                        </td>
                    <?php
                    $count++;
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="persentase">
        <div class="box">
            <h4>Persentase Kursi Kosong</h4>
            <h2><?php echo (int)$percentage ?> %</h2>
        </div>
    </div>
    <div class="keterangan">
            <div class="sold">
                <h2><?php echo $sisaKursi ?></h2>
                <img src="kursikosong.png" alt="" width="50px" height="50px">
                <h5>Kursi Kosong</h5>
            </div>
            <div class="avaliable">
                <h2><?php echo $soldKursi ?></h2>
                <img src="kursi.png" alt="" width="50px" height="50px">
                <h5>Kursi Telah Terisi</h5>
            </div>
    </div>
</body>

</html>