<?php
include 'product.php';
class ProductManager
{
    public function addProducts(array $products): void
    {
        foreach ($products as $product) {
            if(!$product instanceof Product)
            {
                throw new InvalidArgumentException('All items must be an instance of Product.');
            }
            echo "Adding product: " . $product->getName() . "\n";
        }
    }   
}
$product1 = new product("Laptop");
$product2 = new product("Smartphone");

$manager = new ProductManager();
$manager->addProducts([$product1, $product2]);