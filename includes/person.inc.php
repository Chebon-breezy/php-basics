<?php
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
