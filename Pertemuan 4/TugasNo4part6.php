<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);
$twoLowest = array_slice($nilaiSiswa, 0, 2);
echo "Nilai Terendah : " . implode(", ", $twoLowest). "<br>";

rsort($nilaiSiswa);
$twoHighest = array_slice($nilaiSiswa, 0, 2);
echo "Nilai Tertinggi : " . implode(", ", $twoHighest). "<br>";

// Gabungkan dua nilai tertinggi dan terendah
$exclude = array_merge($twoLowest, $twoHighest);

// Mengabaikan dua nilai tertinggi dan terendah dari array asli
$filteredNilaiSiswa = array_diff($nilaiSiswa, $exclude);
echo "Nilai Filter : " . implode(", ", $filteredNilaiSiswa). "<br>";

$average = !empty($filteredNilaiSiswa) ? array_sum($filteredNilaiSiswa) / count($filteredNilaiSiswa) : 0;

echo "Rata-rata nilai setelah mengabaikan 2 nilai tertinggi dan terendah adalah = $average";
?>