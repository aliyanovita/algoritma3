<?php

// Contoh Penggunaan If
// Kamu bisa menggunakan if untuk membuat keputusan sederhana seperti mengecek nilai dari variabel.

$umur = 20;

if ($umur >= 17) {
    echo " <hr>Kamu sudah cukup umur.";
}

// Contoh Penggunaan If dan Else
// Kamu juga bisa menambahkan else untuk menangani situasi ketika kondisi if tidak terpenuhi.
$umur = 16;

if ($umur >= 17) {
    echo " <hr>Kamu sudah cukup umur.";
} else {
    echo " <hr>Kamu belum cukup umur.";
}

// Kombinasi Dengan ElseIf
// Kadang-kadang, kamu mungkin ingin mengecek lebih dari dua kondisi. Untuk ini, PHP menyediakan elseif.
$suhu = 30;

if ($suhu < 20) {
    echo " <hr>Cuaca dingin.";
} elseif ($suhu <= 30) {
    echo " <hr>Cuaca hangat.";
} else {
    echo " <hr>Cuaca panas.";
}
echo "<p><strong>By:Aliya novita";