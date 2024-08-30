<?php

// strlen
// Digunakan untuk mendapatkan panjang sebuah string.

$text = "Hello World! strlen";
echo strlen($text)."<hr>Hello World! strlen"; // Outputs: 12

// str_word_count
// Menghitung jumlah kata dalam string.
$text = "Hello World str_word_count";
echo str_word_count($text)."<hr>Hello World! tr_word_count"; // Outputs: 2

// strrev
// Memutar balik urutan karakter dalam string.
$text = "Hello World! strrev";
echo strrev($text)."<hr>Hello World! strrev"; // Outputs: "!dlroW olleH"

// strtoupper dan strtolower
// Mengubah semua karakter dalam string menjadi huruf besar (strtoupper) atau huruf kecil (strtolower).
echo strtoupper("<hr>Hello World! strtoupper"); // Outputs: "HELLO WORLD!"
echo strtolower("<hr>Hello World! strtoupper"); // Outputs: "hello world!"

// ucwords dan lcfirst
// ucwords mengkapitalkan huruf pertama dari setiap kata dalam string, sedangkan lcfirst mengubah huruf pertama dari string menjadi huruf kecil.
echo ucwords("<hr>hello world!"); // Outputs: "Hello World!"
echo lcfirst("<hr>Hello"); // Outputs: "hello"

// trim, ltrim, dan rtrim
// Menghilangkan whitespace (atau karakter lain) dari awal dan/atau akhir string. trim menghilangkan dari kedua sisi, ltrim hanya dari sisi kiri, dan rtrim hanya dari sisi kanan.
$text = " Hello World! ";
echo "<hr>[" . trim($text) . "] trim"; // Outputs: "[Hello World!]"
echo "<hr>[" . ltrim($text) . "] ltrim"; // Outputs: "[Hello World! ]"
echo "<hr>[" . rtrim($text) . "] rtrim"; // Outputs: "[ Hello World!]"

// strpos dan strrpos
// Menemukan posisi pertama (strpos) atau terakhir (strrpos) dari suatu substring dalam string.
$text = "Hello World!";
echo strpos($text, "World<hr>"); // Outputs: 6
echo strrpos($text, "o<hr>"); // Outputs: 7

// str_replace
// Menggantikan semua kemunculan substring dalam string dengan string lain.
$text = "Hello World!";
echo str_replace("<hr>World", "PHP", $text); // Outputs: "Hello PHP!"

// substr
// Mengembalikan sebagian string berdasarkan posisi awal dan panjang yang ditentukan.
$text = "Hello World!";
echo substr($text, 0, 5)."<hr>"; // Outputs: "Hello"
echo substr($text, 6)."<hr>"; // Outputs: "World!"

// strcmp dan strcasecmp
// Melakukan perbandingan dua string dengan case-sensitive (strcmp) atau case-insensitive (strcasecmp).
echo strcmp("<hr>Hello World!", "Hello World!"); // Outputs: 0
echo strcasecmp("<hr>hello world!", "HELLO WORLD!"); // Outputs: 0

// str_split
// Mengkonversi string menjadi array.
$text = "Hello";
print_r(str_split($text, 2))."<hr>"; // Outputs: Array ( [0] => He [1] => ll [2] => o )
echo "<p><strong>By:Aliya novita";