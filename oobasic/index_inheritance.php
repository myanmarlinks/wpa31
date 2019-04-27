<?php
interface AnimalInterface {
    public function eat();
}

trait Bull {
    public $type; 
    public function bite() {
        echo "Bite!<br>";
    }
}
trait Tarrier  {
    public function play() { echo "Play! <br>"; }
}
interface DogInterface {
    public function bark();
}
abstract class Animal implements AnimalInterface {
    public $name; public function eat() {
        echo "EAT! <br>";
    }

    public function __construct($name) {
        $this->name = $name;
        echo "Animal Contruct! <br>";
    }
}
// Inheritance
class Dog extends Animal implements DogInterface {
    use Bull, Tarrier;
    public $foo;
    public function __construct($name, $foo)  {
        parent::__construct($name);
        $this->foo = $foo;
    }
    public function bark() {
        echo "Bark! <br>";
    }
}
$dog = new Dog("Aung Net", "bar");
$dog->type  = "Test";
$dog->bite();
$dog->eat();
$dog->play();


?>