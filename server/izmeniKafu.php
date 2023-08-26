<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$id = $_POST['id'];
$cena = $_POST['cena'];

$izmenjeno = $konekcija->izmeniCenu($id, $cena);

if ($izmenjeno) {
    echo "Uspesno izmenjena cena";
} else {
    echo "Greska pri izmeni cene";
}