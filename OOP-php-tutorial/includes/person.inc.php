<?php

class Person {

    // Properties
    private $name;
    private $eyeColor;
    private $age;

    // static properties are the same for every instance of the class
    public static $drinkingAge = 21;

    // Constructors
    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //Methods
    public function setName($name){
        $this->name = $name; // "this" references to this class and it's properties
    }

    public function getName() {
        return $this->name;
    }

    // when dealing with statics, we use "self" instead of "this"
    public static function getDA() {
        return self::$drinkingAge;
    }
    // 
    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }

    // destructor can delete an instance of the class
    public function __destruct() {

    }
}
