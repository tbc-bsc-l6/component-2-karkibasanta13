<?php

namespace App\Models\awe;

class GameProduct extends ShopProduct
{
    private $pegi;

    public function __construct(
        string $id,
        string $title,
        string $firstName,
        string $mainName,
        string $price,
        int $pegi
    )
    {
        parent::__construct(
            $id,
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->pegi = $pegi;
    }

    public function getpegi()
    {
        return $this->pegi;
    }
}
