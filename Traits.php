<?php
/**
 * 
 */
trait Asif
{
    public function intro1(){
        return "i am asif i am from Nikunju";
    }
}
trait Arif
{
    public function intro2(){
        return "i am arif i am from Natore";
    }
}
trait Ana
{
    public function intro3(){
        return "i am ana i am from Natore";
    }
}

class welcome{
    use Asif,Ana;
}

class w{
    use Arif,Asif;
}


class x{
    use Arif,Asif;
}

$obj=new welcome();
echo $obj->intro1();
echo "<br/>";
echo $obj->intro3();
echo "<br/>";

$w=new w();
echo $w->intro2();
echo "<br/>";
echo $w->intro1();

$x=new x();
echo "<br/>";
echo $x->intro1();
?>