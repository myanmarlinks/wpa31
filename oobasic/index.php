<?php
class Dog {
    private $name;
    private $leg;
    private $data = [];
    public function __construct($name, $leg = 4) {
        $this->name = $name;
        $this->leg = $leg;
        echo "Dog Contruct! <br>";
    }
    public function __set($key ,$value) {
        $this->data[$key] = $value;
    }
    public function __get($key) {
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else {
            trigger_error("Array Key does not exist", E_USER_ERROR);
        }
    }
    public function __call($method, $arguments) {
        var_dump($method);
        var_dump($arguments);
    }

    public static function __callStatic($method, $arguments) {
        var_dump($method);
        var_dump($arguments);
    }

    public static function notice() {
        echo "Beware Dog! <br>";
    }
    function bark() {
        echo "Woof! <br>";
    }
    public function __destruct() {
        echo "Dog Destruct! <br>";
    }
}

Dog::notice();
Dog::warning();

// $dog = new Dog("Aung Net");
// $dog->color = "Blue";
// echo $dog->color . "<br>";
// $dog->bark();
// $dog->dance("Hip Hop", 5);
// unset($dog);

// $dog2 = new Dog("Puppy", 3);
// $dog2->bark();
?>