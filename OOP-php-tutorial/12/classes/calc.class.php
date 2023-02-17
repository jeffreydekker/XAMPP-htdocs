<?php

// Scope resolution operator tutorial
class FirstClass {
    const EXAMPLE = "You can't change this!";

    public static function test() {
        $testing = "This is a test!";
        return $testing;

    }
}

//we use the scope resolution operator to access static properties 
//or methods using :: like we would with $this->
$a = FirstClass::test();
echo $a;

class SecondClass extends FirstClass {

    public static $staticProperty = "This is a static property!";

    public static function anotherTest() {

        //parent is a key word to access the properties and methods via inheretance
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$b = SecondClass::anotherTest();
echo $b;