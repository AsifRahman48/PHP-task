<?php
// There are three type of access modifiers 
//public ->access everywher
//private -> access within class
//protected ->accessed within the class and by classes derived from that class

class Person{
    
    private $name;    
    private $age; 

    public function __construct($name){
        $this->name = $name;
    }
    protected function age(){
        $this->age = "24, {$this->name}";
    }
    public function __destruct(){
        $this->age();
        echo $this->age;
    }
}

$person = new Person("Asif Rahman");
?>