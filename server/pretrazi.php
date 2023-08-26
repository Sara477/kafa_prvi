<?php

/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$id = $_POST['id'];

if($id == 0) {
    $kafice = $konekcija->vratiSveKafe();
} else {
    $kafice = $konekcija->vratiKafeZaTip($id);
}

echo json_encode($kafice);


