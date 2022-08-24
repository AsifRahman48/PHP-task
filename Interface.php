<?Php 
interface animal{
    public function sound();
}

class cat implements animal{
    public function sound(){
        return "Meow";
    }
}
class dog implements animal{
        public function sound(){
            echo "Brak";
        }  
}
class mouse implements animal{
    public function sound(){
        echo "squeak";
    }  
}
class bird implements animal{
    public function sound(){
        echo "kuho";
    }  
}

$cat=new cat();
$dog=new dog();
$mouse=new mouse();
$bird=new bird();

echo $cat->sound();

$animals=array($cat, $dog, $mouse, $bird);
//echo "<pre>";
//print_r($animals);
foreach($animals as $list){
    echo "<br/>";
     echo $list->sound();
}
?>