<?php

$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "<hr>karena bapak sudah menikah, kami ucapkan Selamat datang pak!";
    } else {
        echo "<hr>karena usia kamu sudah > 18, kami ucapkan Selamat datang wahai pemuda!";
    }
} else {
    echo "<hr>Maaf umur kamu masih $umur , website ini hanya untuk yang sudah berumur 18+";
}


$umur = 25;
$menikah = false;

if($umur > 18){
    if($menikah){
        echo "<hr>karena bapak sudah menikah, kami ucapkan Selamat datang pak!";
    } else {
        echo "<hr>karena usia kamu sudah > 18, kami ucapkan Selamat datang wahai pemuda!";
    }
} else {
    echo "<hr>Maaf umur kamu masih $umur , website ini hanya untuk yang sudah berumur 18+";
}

$umur = 40;
$menikah = true;

if($umur > 18){
    if($menikah){
        echo "<hr>karena bapak sudah menikah, kami ucapkan Selamat datang pak!";
    } else {
        echo "<hr>karena usia kamu sudah > 18, kami ucapkan Selamat datang wahai pemuda!";
    }
} else {
    echo "<hr>Maaf umur kamu masih $umur , website ini hanya untuk yang sudah berumur 18+";
}
echo "<p><strong>By:Aliya novita";