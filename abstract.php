<?php
abstract class x{
    public $name;
    public $adress;

    public function __construct($name='',$adress=''){
        $this->name=$name;
        $this->adress=$adress;
    }
    abstract public function intro() ;
    abstract public function prefixName($pname);
}

class asif extends x{
    public function intro() {
        return "i am {$this->name} and i am from {$this->adress}";
    }
    public function prefixName($pname){
        if($pname=="asif"){
            $cgpa="3.50";
        }
        if($pname=="arif"){
            $cgpa="3.00";
        }
        if($pname=="abir"){
            $cgpa="2.50";
        }
        return "{$pname}'s cgpa is {$cgpa}";
    }
}
 $obj=new asif("asif","natore");
echo $obj->intro();
echo "<br/>";
echo $obj->prefixName("asif");
echo "<br/>";
echo $obj->prefixName("arif");
echo "<br/>";
echo $obj->prefixName("abir");
?>