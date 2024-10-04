<!DOCTYPE html>
<t lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    .container{
      display: flex;
      align-items: start;
      justify-content: center;
      gap: 20px;
      padding:15px;
      border-radius: 10px;
      border: 1px solid #ddd;
      width: max-content;
      box-shadow: 0 0 10px #ddd;
      margin: 0 auto;
    }
    .container img{
      object-fit: cover;
      border-radius: 10px;
      height: 200px;
    }
  </style>
</head>
<body>
  <?php
    $Dosen = [
      'nama' => 'Elok Nur Hamdana',
      'domisili' => 'Malang',
      'jenis_kelamin' => 'Perempuan'
    ];

    // echo "Nama : {$Dosen ['nama']} <br>";
    // echo "Domisili : {$Dosen ['domisili']} <br>";
    // echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
  ?>
  <div class="container">
    <img src="https://images2.minutemediacdn.com/image/upload/c_crop,w_1902,h_1069,x_2158,y_55/c_fill,w_912,ar_16:9,f_auto,q_auto,g_auto/images/voltaxMediaLibrary/mmsport/si/01j8wht8hqxh3e313bh8.jpg" alt="" width="170px/>
    <div class="data">
      <table cellpadding="5">
        <tr>
        <td style="font-weight: bold;">Nama</td>
        <td><?php echo $Dosen ['nama'];?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Domisili</td>
        <td><?php echo $Dosen ['domisili'];?></td>
      </th>
      <tr>
        <td style="font-weight: bold;">Jenis Kelamin</td>
        <td><?php echo $Dosen ['jenis_kelamin'];?></td>
      </tr>
    </table>
    </div>
</div>
</body>
</t>