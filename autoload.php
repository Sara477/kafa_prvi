<?php

require 'domen/TipKafe.php';
require 'domen/ZemljaPorekla.php';
require 'domen/Kafa.php';

require 'baza/DbKonekcija.php';

$konekcija = new DbKonekcija();

return $konekcija;
