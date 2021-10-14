<?php

include_once "../models/Category.php";
include_once "../models/EcommerceCatalog.php";
include_once "../models/Product.php";

use Models\Category;
use Models\EcommerceCatalog;
use Models\Product;

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