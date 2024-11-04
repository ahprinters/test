<?php
class ProductManager
{
    public function addProduct(array $products): void
    {
        foreach ($products as $product) {
            if(!$Product instanceof Product)    
            {
                throw new InvalidArgumentException('All items must be an instance of Product.');
            }
            echo "Adding product: " . $product->gethostname() . "\n";
        }
    }   
}