<?php


class Kafa implements JsonSerializable
{
    private $kafaId;
    private $naziv;
    private $opis;
    private $cena;
    private $tipKafe;
    private $zemljaPorekla;

    /**
     * @param $kafaId
     * @param $naziv
     * @param $opis
     * @param $cena
     * @param $tipKafe
     * @param $zemljaPorekla
     */
    public function __construct($kafaId, $naziv, $opis, $cena, $tipKafe, $zemljaPorekla)
    {
        $this->kafaId = $kafaId;
        $this->naziv = $naziv;
        $this->opis = $opis;
        $this->cena = $cena;
        $this->tipKafe = $tipKafe;
        $this->zemljaPorekla = $zemljaPorekla;
    }


    /**
     * @return mixed
     */
    public function getKafaId()
    {
        return $this->kafaId;
    }

    /**
     * @param mixed $kafaId
     * @return Kafa
     */
    public function setKafaId($kafaId)
    {
        $this->kafaId = $kafaId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNaziv()
    {
        return $this->naziv;
    }

    /**
     * @param mixed $naziv
     * @return Kafa
     */
    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * @param mixed $opis
     * @return Kafa
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param mixed $cena
     * @return Kafa
     */
    public function setCena($cena)
    {
        $this->cena = $cena;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipKafe()
    {
        return $this->tipKafe;
    }

    /**
     * @param mixed $tipKafe
     * @return Kafa
     */
    public function setTipKafe($tipKafe)
    {
        $this->tipKafe = $tipKafe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZemljaPorekla()
    {
        return $this->zemljaPorekla;
    }

    /**
     * @param mixed $zemljaPorekla
     * @return Kafa
     */
    public function setZemljaPorekla($zemljaPorekla)
    {
        $this->zemljaPorekla = $zemljaPorekla;
        return $this;
    }


    public function jsonSerialize(): array
    {
        return [
            'kafa_id' => $this->kafaId,
            'naziv' => $this->naziv,
            'opis' => $this->opis,
            'cena' => $this->cena,
            'tipKafe' => $this->tipKafe,
            'zemljaPorekla' => $this->zemljaPorekla
        ];
    }

    public static function toEntity($row)
    {
        $tipKafe = TipKafe::toEntity($row);
        $zemljaPorekla = ZemljaPorekla::toEntity($row);
        return new self($row['kafa_id'], $row['naziv'], $row['opis'], $row['cena'], $tipKafe, $zemljaPorekla);
    }
}