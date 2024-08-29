<?php
class buah {
    public $nama;
    public $nama;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna =$warna;
    }
}

$apel = new buah("apel", "merah");
$pisang = new buah("pisang", "warna");
print_r($apel);
print "<p>";
print_r($pisang);