<?php
// penggunaan dasar fungsi die()
if (file_exists('file_important.txt')) {
    echo "file ditemukan.";
}else {
    die("Error: File tidak ditemukan, dan logika selanjutnya tidak akan dieksukusi");
}
//Menambahkan Status HTTP
if (!user_is_logged_in()) {
    header('HTTP/1.1 403 forbidden');
    die("Error: kamu tidak memiliki akses.");
}
//Menggabungkan dengan fungsi exit()
if ($koneksi_database ==false) {
    exit(1); //menghentikan skrip dengan kode keluar 1
}
// Memahami Output Buffering
ob_start();
ocho "Ini adalah output buffer.";

// kondisi tertentu
if ($error) {
    ob_end_clean(); // bersihkan output buffer
    die ("Skrip dihentikan karena error.");
}
