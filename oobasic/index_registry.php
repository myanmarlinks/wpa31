<?php
class Dog {
        public function __construct() {
                echo "Dog Construct!  <br>";
        }
        public function bark() {
                echo "Bark <br>";
        }
}
class Cat {
        public function __construct() {
                echo "Cat Construct!  <br>";
        }
        public function meow() {
                echo "Meow! <br>";
        }
}

class Registry {
        static private $_store = [];
        
        static public function add($object, $name = null)
        {
                var_dump( get_class($object) );
                if(is_null($name)) {
                        $name = get_class($object);
                }
                $name = strtolower($name);       
                if (!isset(self::$_store[$name])) {
                        self::$_store[$name]= $object;
                }
        }
        static public function get($name) {
                if (!self::contains($name)) {
                        throw new Exception("Object does not exist in registry");
                        
                }
                return self::$_store[$name];
        }
        
        static public function contains($name)
        {
                if (!isset(self::$_store[$name])) {
                        return false;
                }
                return true;
        }
        static public function remove($name)
        {
                if (self::contains($name)) {
                        unset(self::$_store[$name]);
                }
        }
}
$dog = new Dog();
$cat = new Cat();
Registry::add($dog);
Registry::add($cat, "mycat");



?>