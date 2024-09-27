<?php
//membuat fungsi 
function hitungUmur($thn_lahir, $thn_sekarang) { 
  $umur = $thn_sekarang -  $thn_lahir;
  return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
  echo $salam . ", ";
  echo "Perkenalkan, nama saya " . $nama . "<br/>";
  echo "Umur saya adalah ". hitungUmur(2005, 2024) . "tahun<br/>";
  // isi sesuai dengan tahun lahir kalian
  echo "Senang berkenalan dengan Anda<br/>";
}
//memanggil fungsi yang sudah dibuat 
perkenalan("Elok");
