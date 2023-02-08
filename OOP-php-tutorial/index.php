<?php

// include the class, it's properties and methods for usage
include 'includes/person.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP tutorial</title>
</head>
<body>

    <?php
        // "new Person" creates a new instance of the class "Person". We also
        // give it some property values for it's constructor
        $person1 = new Person("Jeffrey", "Green", 28);

        // :: references to a static property of a class
        echo Person::$drinkingAge;

        // the below static method will update a static property
        Person::setDrinkingAge(18);

        // echo out the updated static property
        echo Person::$drinkingAge;

        Person::getDA();

        // will give error because of private property 
        echo $person1->name;

        // unset function will delete the instance of a class 
        unset($person1);

        // this will not give an error because the method is public, but it will give 
        // an error because the instance of the class no longer exists
        echo $person1->getName();
    ?>

</body>
</html>