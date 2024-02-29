<?php

class Newclass {
    //properties and methods goes here
    public $info = "This is info";
}

class person {
    protected $first = "Brian";
    private $last = "Chebon";
    private $age = "25";
}

class pet extends person {
    public function owner(){
        $a = $this->first;
        return $a;
    }
}

$object = new Newclass;
var_dump($object); 