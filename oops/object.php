<?php
class Fruit{


    public $name;
    public $price;
    function about($fname,$fprice)
    {
        $this->name=$fname;
        $this->price=$fprice;

       echo "Fruit name is ".$this->name;
       echo "Fruit price is ".$this->price; 
    }
     


}
$obj =new Fruit();
$obj->about("mango",20);





?>