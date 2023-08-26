<?php

class DbKonekcija
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new mysqli('localhost', 'root', '', 'kafa_prvi');
        $this->konekcija->set_charset('utf8');
    }

    public function vratiSveKafe() {
        $upit = "SELECT * FROM kafa k INNER JOIN tip_kafe t ON k.tip_id = t.tip_kafe_id INNER JOIN zemlja_porekla z ON k.zemlja_porekla_id = z.zemlja_id";
        $rezultat = $this->konekcija->query($upit);

        $kafice = [];

        while($row = $rezultat->fetch_assoc()){
            $kafice[] = Kafa::toEntity($row);
        }

        return $kafice;
    }
}