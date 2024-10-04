<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
  <link rel="stylesheet" href="style.css">
  <script src="jquery-3.7.1.js"></script>
  <script>
    $(document).ready(function() {
      $("div.data").hide();
      $("div.data table").hide();
      $("div.data h2").hide();
      $(".show-db").click(function() {
        $("div.data").slideToggle("slow", function() {
          $("div.data table").fadeToggle("slow");
          $("div.data h2").fadeToggle("slow");
        });
      })
    })
  </script>
</head>

<body>
  <?php
  $dataSiswa = [
    [
      'nama' => 'Andi',
      'umur' => '15',
      'kelas' => '10A',
      'alamat' => 'Malang',
    ],
    [
      'nama' => 'Siti',
      'umur' => '16',
      'kelas' => '10B',
      'alamat' => 'Batu',
    ],
    [
      'nama' => 'Budi',
      'umur' => '15',
      'kelas' => '10A',
      'alamat' => 'Dinoyo',
    ],
    [
      'nama' => 'Anton',
      'umur' => '25',
      'kelas' => '15A',
      'alamat' => 'Dinoyo',
    ],
  ];

  function displayData($dataSiswa)
  {
    foreach ($dataSiswa as $item) {
      echo "<tr>";
      echo "<td>{$item['nama']}</td>";
      echo "<td>{$item['umur']}</td>";
      echo "<td>{$item['kelas']}</td>";
      echo "<td>{$item['alamat']}</td>";
      echo "</tr>";
    }
  }

  function countAgeAvg($dataUmur)
  {
    $avg = 0;
    foreach ($dataUmur as $item) {
      $avg += $item['umur'];
    }
    $avg /= count($dataUmur);
    return $avg;
  }
  ?>
  <h1 align="center">Data Siswa</h1>
  <div class="container">
    <span class="show-db">Click to show database</span>
    <div class="data">
      <table cellpadding="10px">
        <tr>
          <th>Nama</th>
          <th>Umur</th>
          <th>Kelas</th>
          <th>Alamat</th>
        </tr>
        <?php displayData($dataSiswa) ?>
      </table>
      <h2 class="rata">Rata-rata Umur Siswa : <span class="age"><?php echo countAgeAvg($dataSiswa) ?></span> tahun</h2>
    </div>
  </div>
</body>

</html>