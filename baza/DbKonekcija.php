<?php

class DbKonekcija
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new mysqli('localhost', 'root', '', 'kafa_prvi');
        $this->konekcija->set_charset('utf8');
    }

    public function vratiSveKafe(): array
    {
        $upit = "SELECT * FROM kafa k INNER JOIN tip_kafe t ON k.tip_id = t.tip_kafe_id INNER JOIN zemlja_porekla z ON k.zemlja_porekla_id = z.zemlja_id";
        $rezultat = $this->konekcija->query($upit);

        $kafice = [];

        while($row = $rezultat->fetch_assoc()){
            $kafice[] = Kafa::toEntity($row);
        }

        return $kafice;
    }

    public function vratiKafeZaTip($id): array
    {
        $upit = "SELECT * FROM kafa k INNER JOIN tip_kafe t ON k.tip_id = t.tip_kafe_id INNER JOIN zemlja_porekla z ON k.zemlja_porekla_id = z.zemlja_id WHERE k.tip_id = $id";
        $rezultat = $this->konekcija->query($upit);

        $kafice = [];

        while($row = $rezultat->fetch_assoc()){
            $kafice[] = Kafa::toEntity($row);
        }

        return $kafice;
    }

    public function vratiTipoveKafe()
    {
        $upit = "SELECT * FROM tip_kafe";
        $rezultat = $this->konekcija->query($upit);

        $tipovi = [];

        while($row = $rezultat->fetch_assoc()){
            $tipovi[] = TipKafe::toEntity($row);
        }

        return $tipovi;
    }

    public function vratiZemljePorekla(): array
    {
        $upit = "SELECT * FROM zemlja_porekla";

        $rezultat = $this->konekcija->query($upit);

        $zemlje = [];

        while($row = $rezultat->fetch_assoc()){
            $zemlje[] = ZemljaPorekla::toEntity($row);
        }

        return $zemlje;
    }

    public function unesiKafu($naziv, $opis, $cena, $zemljaPorekla, $tip)
    {
        $upit = "INSERT INTO kafa VALUES (null, '$naziv', '$opis', $cena, $zemljaPorekla, $tip)";

        $rezultat = $this->konekcija->query($upit);

        return $rezultat;
    }

    public function izmeniCenu($id, $cena)
    {
        $upit = "UPDATE kafa SET cena = $cena WHERE kafa_id = $id";

        $rezultat = $this->konekcija->query($upit);

        return $rezultat;
    }

    public function obrisiKafu(mixed $id)
    {
        $upit = "DELETE FROM kafa WHERE kafa_id = $id";

        $rezultat = $this->konekcija->query($upit);

        return $rezultat;
    }
}