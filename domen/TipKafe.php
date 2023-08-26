<?php

class TipKafe implements JsonSerializable
{
    private $id;
    private $tip;

    public function __construct($id, $tip) {
        $this->id = $id;
        $this->tip = $tip;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TipKafe
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTip()
    {
        return $this->tip;
    }

    /**
     * @param mixed $tip
     * @return TipKafe
     */
    public function setTip($tip)
    {
        $this->tip = $tip;
        return $this;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'tip' => $this->tip
        ];
    }

    public static function toEntity($row): TipKafe{
        return new self($row['tip_kafe_id'], $row['tip']);
    }

}