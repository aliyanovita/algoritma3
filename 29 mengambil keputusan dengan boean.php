<?php

// Boolean dalam Pengambilan Keputusan
// Sangat umum menggunakan tipe data boolean dalam statement kondisional. Berikut contoh sederhana:

$login_sukses = true;

if ($login_sukses) {
    echo "<hr>kamu berhasil login, dan Selamat datang pengguna!";
} else {
    echo "<hr>Login gagal, silakan coba lagi.";
}
// Konversi ke Boolean
// Nilai 0 (zero), 0.0 (zero float), string kosong " " dan string "0", array kosong, variabel khusus NULL, serta objek yang belum di-assign akan dianggap sebagai false.
$nilai = 0;

if ($nilai) {
    echo "<hr>Variabel ini bernilai true";
} else {
    echo "<hr>Variabel ini bernilai false";
}
// Keluaran akan "Variabel ini bernilai false" karena nilai 0 dianggap false.

// Boolean dan Fungsi
$isiFile = "Contoh teks di dalam file.";
$status = file_put_contents("example.txt", $isiFile);

if ($status !== false) {
    echo "<hr>Penulisan file berhasil!";
} else {
    echo "<hr>Penulisan file gagal.";
}
echo "<p><strong>By:Aliya novita";