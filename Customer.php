<?php
// Define the Customer class with properties for customerID, name, and email
class Customer {
    public int $customerID;
    public string $name;
    public string $email;

    // Constructor to initialize the properties
    public function __construct(int $customerID, string $name, string $email) {
        $this->customerID = $customerID;
        $this->name = $name;
        $this->email = $email;
    }

    // Method to display the customer information
    public function displayCustomer(): void {
        echo "Customer ID: " . $this->customerID . ", Name: " . $this->name . ", Email: " . $this->email;
    }
}

// Step 1: Create an instance of the Customer class
$customer = new Customer(101, "Bob Smith", "bob.smith@example.com");

// Step 2: Serialize the object
$serializedCustomer = serialize($customer);

// Save the serialized object to a file
file_put_contents('customer_cache.txt', $serializedCustomer);

// Step 3: Unserialize the object
$retrievedData = file_get_contents('customer_cache.txt');
$unserializedCustomer = unserialize($retrievedData);

// Step 4: Display the unserialized object information
$unserializedCustomer->displayCustomer();
echo "\n";
echo $unserializedCustomer->name;
?>
