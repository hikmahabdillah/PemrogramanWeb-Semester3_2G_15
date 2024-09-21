<?php
$daftarNilaiMatematika = [
  ['Alice', 85],
  ['Bob', 92],
  ['Charlie', 78],
  ['David', 64],
  ['Eva', 90],
];

$daftarNilaiDiatasRata = [];
$rata = 0;

// hitung total nilai
foreach ($daftarNilaiMatematika as $nilai) {
  $rata += $nilai[1];
}
//hitung rata rata
$rata /= count($daftarNilaiMatematika);

// menyimpan nilai di atas rata rata
foreach ($daftarNilaiMatematika as $nilai) {
  if ($nilai[1] > $rata) {
    $daftarNilaiDiatasRata[] = $nilai[0] . ' (' . $nilai[1] . ')';
  }
}

echo "Jumlah siswa: " . count($daftarNilaiMatematika) . "<br>";
echo "Rata rata : $rata <br><br>";

echo "Daftar Nilai Ujian Matematika Di Atas Rata-rata : " . implode(', ', $daftarNilaiDiatasRata);