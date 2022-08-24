<?php /*
class SRK{
    public $age;
    public $company;
    public function __construct($company,$age=0){
        
        $this->company=$company;
        $this->age=$age;
    }
    public function intro($age){
        $this->age=$age;
        return "Sukur Ali {$this->age} years old and he work in {$this->company}";
    }
}
class asif extends SRK{
    public function __construct($company){
        //$this->company=$company;
       parent::__construct("Southeast");
       //echo $com;
    }
    public function intro($age,$company){
       //$this->age=$age;
        $intro=parent::intro(26);
        echo $intro;
        echo "<br/>";
        return "asif {$age} years old and he work in {$company}";
        
    }
}
$obj = new asif('//');
echo $obj->intro(24,"BS-23");
//echo $obj->__construct("BS-23");
echo "<br/>";
//echo $obj->intro(25); */


 class x{
    public $batch;
    public $year;


    public function __construct($batch,$year){
        $this->batch=$batch;
        $this->year=$year;
        //return "Runnig batch{$this->batch},{$this->year}";
    }

    public function abir(){
        return "Abir {$this->batch} batch , {$this->year}";
    }
    public function arif($batch,$year){
        return "Arif {$batch} batch ,{$year} ";
    }

}

class y extends x{
     /*public function __construct($batch,$year){
        return "Runnig batch{$this->batch},{$this->year}";
     }*/

   public function asif($batch,$year){
        return "Asif {$batch} batch , {$year}";
        
    }
}

$obj=new y(60,2022);
//$obj1=new x();
echo $obj->asif(47,2017);
echo "<br/>";
//echo $obj1->arif(46,2016);
echo $obj->abir();
echo "<br/>";

echo $obj->arif(45,2016);
//echo $obj->__construct(50,2022);

?>