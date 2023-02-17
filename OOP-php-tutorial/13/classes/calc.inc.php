<?php
//interfaces tutorial


// interfaces are a blueprint to group together similair classes. 
// this is to tell them how to behave with the interface keyword

interface PaymentInterface {
    public function payNow();

}

interface LogintInterface {
    public function loginFirst();
    
}

class Paypal implements PaymentInterface, LogintInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LogintInterface {
    public function loginFirst() {}
    public function payNow() {}
    public function paymentProcess() {
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

class Cash implements PaymentInterface {
    public function payNow() {}
    public function paymentProcess() {
        $this->payNow();
    }
}

// below were gonna take one of the classes and run them inside this class to make a purchase
class BuyProduct {
    public function pay(PaymentInterface $paymentType) {
        $paymentType->paymentProcess();
    }

    public function onlinePay(LogintInterface $paymentType) {
        $paymentType->paymentProcess();
    }
}

//it is possible with type hinting to pass in an object 
$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
