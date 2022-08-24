<?php
$int=24;
echo gettype($int)."<br/>";
$pi=3.1416;
echo gettype($pi)."<br/>";
$bool=true;
echo gettype($bool)."<br/>";
$name="Asif Rahman";
echo gettype($name)."<br/>";
$array=array('Volbo','BMW');
echo gettype($array)."<br/>";

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo gettype($myCar)."<br/>";
echo $myCar -> message();

?>