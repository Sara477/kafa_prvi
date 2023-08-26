<?php

class ZemljaPorekla implements JsonSerializable
{
    private $id;
    private $zemlja;

    public function __construct($id, $zemlja) {
        $this->id = $id;
        $this->zemlja = $zemlja;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getZemlja()
    {
        return $this->zemlja;
    }

    /**
     * @param mixed $zemlja
     */
    public function setZemlja($zemlja): void
    {
        $this->zemlja = $zemlja;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'zemlja' => $this->zemlja
        ];
    }

    public static function toEntity($row): ZemljaPorekla{
        return new self($row['zemlja_id'], $row['zemlja']);
    }
}