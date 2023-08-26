<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$tipoviKafe = $konekcija->vratiTipoveKafe();

echo json_encode($tipoviKafe);