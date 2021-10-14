<?php

namespace Models;

class EcommerceCatalog
{
    public function __construct(
        private ?Category $rootCategory = null
    )
    {
    }

    public function addRootCategory(Category $rootCategory): self
    {
        $this->rootCategory = $rootCategory;

        return $this;
    }
}