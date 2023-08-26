<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$naziv = $_POST['naziv'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$zemljaPorekla = $_POST['zemljaPorekla'];
$tip = $_POST['tipKafe'];

$uneto = $konekcija->unesiKafu($naziv, $opis, $cena, $zemljaPorekla, $tip);

if ($uneto) {
    echo "Uspesno sacuvana kafa";
} else {
    echo "Greska pri cuvanju kafe";
}