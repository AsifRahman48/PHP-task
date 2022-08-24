<?php /*
//static Method
class intro{
    public static function welcome(){
        return "Hi , I am asif";
    }
}
class x{
    public function welcome1(){
       $x= intro::welcome();
       return $x;
    }
}
$obj=new x();
echo $obj->welcome1();  */

/*class x{
    public static function webSiteName(){
        return "BS_23.com";
    }
    public static function url(){
        return "localhost/oop/static.php";
    }
}
class y extends x{
    public $name;
    public $url;
    public function __construct(){
        $this->name=parent::webSiteName();
        $this->url=parent::url();
    }
}
$obj=new y();
echo $obj->name;
echo "<br/>";
echo $obj->url; */


//Static Properties
/*
class pi{
    public static $value=3.1416;
    public function staticValue(){
        return self::$value;
    }
}
$obj=new pi();
echo $obj->staticValue();
*/


class pi{
    public static $value=3.1416;
}
class x extends pi{
    public function x(){
        return parent::$value;
    }
}

$obj=new x();
echo $obj->x();
?>