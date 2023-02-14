<?php

class House {
    public $roadname;
    public $housenumber;

    public function __construct($roadname, $housenumber) {
        $this->roadname = $roadname;
        $this->housenumber = $housenumber;
    }
    
    public function getAddress() {
        $address = $this->roadname . $this->housenumber;
        return $address;
    }
}
