<?php
// Pernyataan If
// Pernyataan if digunakan untuk menjalankan kode hanya jika kondisi tertentu terpenuhi.
$nilai = 75;
if ($nilai > 70) {
  echo "<hr>Selamat, kamu lulus!";
}

// Pernyataan Else
// Untuk menentukan blok kode yang akan dijalankan jika kondisi if tidak terpenuhi, kamu bisa menggunakan pernyataan else.
$nilai = 60;
if ($nilai > 70) {
  echo "<hr>Selamat, kamu lulus!";
} else {
  echo "<hr>Maaf, kamu harus mengulang.";
}

// Pernyataan Elseif
// Ketika kamu memiliki beberapa kondisi yang harus diperiksa, gunakan pernyataan elseif.
$nilai = 80;
if ($nilai >= 90) {
  echo "<hr>Nilai kamu A";
} elseif ($nilai >= 80) {
  echo "<hr>Nilai kamu B";
} else {
  echo "<hr>Nilai kamu C";
}

// Pernyataan Switch
// Pernyataan switch digunakan sebagai alternatif untuk pernyataan if multipercabangan yang panjang dan rumit.
$grade = 'B';
switch ($grade) {
  case 'A':
    echo "<hr>Luar biasa!";
    break;
  case 'B':
    echo "<hr>Mantap!";
    break;
  case 'C':
    echo "<hr>Bagus!";
    break;
  default:
    echo "<hr>Tetap semangat!";
}
echo "<p><strong>By:Aliya novita";