<?php

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

$rootCategory = new Category("root");

$ecommerceCatalog = new EcommerceCatalog();
$ecommerceCatalog->addRootCategory($rootCategory);

$womenCategory = new Category("Women products");
$menCategory = new Category("Men products");

$womenCategory->addChildCategory(new Category("Shoes"));
$womenCategory->addChildCategory(new Category("Handbags"));

$rootCategory->addChildCategory($womenCategory);
$rootCategory->addChildCategory($menCategory);

$product1 = new Product("product1");
$product2 = new Product("product2");
$product3 = new Product("product3");
$product3->addQuantity(3);

$womenCategory->addProduct($product3);

echo "No errors :)";