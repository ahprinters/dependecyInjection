<?php
// Define the Book class with properties for title, author, and year
class Book {
    public string $title;
    public string $author;
    public int $year;

    // Constructor to initialize the properties
    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    // Method to display the book information
    public function displayBook(): void {
        echo "Title: " . $this->title . ", Author: " . $this->author . ", Year: " . $this->year;
    }
}

// Step 1: Create an instance of the Book class
$book = new Book("1984", "George Orwell", 1949);

// Step 2: Serialize the object
$serializedBook = serialize($book);

// Save the serialized object to a file
file_put_contents('book_cache.txt', $serializedBook);

// Step 3: Unserialize the object
$retrievedData = file_get_contents('book_cache.txt');
$unserializedBook = unserialize($retrievedData);

// Step 4: Display the unserialized object information
$unserializedBook->displayBook();
echo "\n";  
echo $unserializedBook->title;
?>
