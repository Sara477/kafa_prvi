<?php
/** @var DbKonekcija $konekcija */
$konekcija = require_once '../autoload.php';

$zemljePorekla = $konekcija->vratiZemljePorekla();

echo json_encode($zemljePorekla);