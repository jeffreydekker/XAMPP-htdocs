<?php

// with the abstract keyword we can no longer create objects from this class.
// we can only access this class from other classes

abstract class Visa {
    public function visaPayment() {
        return "Perform a payment";
    }

    // if we make an abstract methods inside classes we need to make
    // the whole class abstract as a general rule
    abstract public function getPayment();

    
}