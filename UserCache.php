<?php   
class UserCache {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$user = new UserCache('John', 30);
file_put_contents('cache.txt', serialize($user)); // Save the serialized object to a file
$cachedUser = unserialize(file_get_contents('cache.txt')); // Read and unserialize the object from the file
echo $cachedUser->name . ' is ' . $cachedUser->age . ' years old.'; // Print the object's properties
var_dump($cachedUser); // Print the details of the object
