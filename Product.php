<?php
class Product {
    public string $name;
    public float $price;
    public string $category;

    public function __construct(string $name, float $price, string $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function displayProduct(): void {
        echo "Product: " . $this->name . ", Price: " . $this->price . ", Category: " . $this->category;
    }
}

// Step 1: Create an instance of the Product class
$product = new Product("Laptop", 999.99, "Electronics");

// Step 2: Serialize the object
$serializedProduct = serialize($product);
file_put_contents('product_cache.txt', $serializedProduct);

// Step 3: Unserialize the object
$retrievedData = file_get_contents('product_cache.txt');
$unserializedProduct = unserialize($retrievedData);

// Step 4: Display the unserialized object information
$unserializedProduct->displayProduct();
?>
