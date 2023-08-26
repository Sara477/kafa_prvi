<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once 'autoload.php';

$kafice = $konekcija->vratiSveKafe();

echo json_encode($kafice);
