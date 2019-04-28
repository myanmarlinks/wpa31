<?php

$foo = function($value) {
    echo $value . "<br>";
};

$foo("Hello World");

echo gettype($foo);

?>