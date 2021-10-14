<?php

namespace Models;

class Category
{
    public function __construct(
        private string $name,
        private array  $childCategories = [],
        private array  $products = [],
    )
    {
    }

    public function addChildCategory(Category $category): self
    {
        $this->childCategories[] = $category;

        return $this;
    }

    public function addProduct(Product $product): self
    {
        $this->products[] = $product;

        return $this;
    }
}