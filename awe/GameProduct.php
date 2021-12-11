<?php

namespace awe;

class GameProduct extends ShopProduct
{
    // Pan European game information
    private $pegi;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        string $price,
        string $pegi
    ) {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->pegi = $pegi;
    }

    public function getPegi()
    {
        return $this->pegi;
    }
}
