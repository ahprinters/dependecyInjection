<?php
class User {
    public string $name;
    public string $email;

    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function displayInfo(): void {
        echo "Name: " . $this->name . ", Email: " . $this->email;
    }
}

// Step 1: Create an instance of the User class
$user = new User("Alice", "alice@example.com");

// Step 2: Serialize the object
$serializedUser = serialize($user);
file_put_contents('user_cache.txt', $serializedUser);

// Step 3: Unserialize the object
$retrievedData = file_get_contents('user_cache.txt');
$unserializedUser = unserialize($retrievedData);

// Step 4: Display the unserialized object information
$unserializedUser->displayInfo();
?>
