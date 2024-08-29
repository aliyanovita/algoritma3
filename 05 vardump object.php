<?php
class mobil {
    public $merk;
    public $model;
}

$mobil_baru = new mobil();
$mobil_baru->merk ="toyota";
$mobil_baru->model ="corolla";

var_dump($mobil_baru);
?>