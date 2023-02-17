<?php
// regular class

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

// anonymous class 
// anonymous classes don't use memory on our website so its less heavy to load up
// after the instance of the class it gets deleted and doesnt get used anywhere else on the website


// with anonymous classes without constructors we don't need the parameters after the class keyword
$newObj = new class() {
    public function helloWorld() {
        echo "Hello World!";

    }
};

$newObj->helloWorld();