<?php

require "index_registry.php";

$dog = Registry::get("dog");
$dog->bark();
$cat = Registry::get("mycat");
$cat->meow();

class Duck {
    public function __construct() {
        echo "Duck! <br>";
    }
    public function quack() {
        echo "Quack! <br>";
    }
}
Registry::add(new Duck());
$duck = Registry::get("duck");
$duck->quack();
Registry::remove("mycat");
$cat = Registry::get("mycat");
$cat->meow();
