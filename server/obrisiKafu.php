<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$id = $_POST['id'];

$obrisano = $konekcija->obrisiKafu($id);

if ($obrisano) {
    echo "Uspesno obrisana kafa";
} else {
    echo "Greska pri brisanju kafe";
}