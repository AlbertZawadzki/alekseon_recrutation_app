<?php

namespace AlekseonRecrutationApp\Models;

class Product
{
    public function __construct(
        private string $name,
        private int    $quantity = 0
    )
    {
    }

    public function addQuantity(int $quantity): self
    {
        $this->quantity += $quantity;

        return $this;
    }
}