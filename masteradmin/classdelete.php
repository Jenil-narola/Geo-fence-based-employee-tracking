<?php
class Car{

    public $color='black';
    public $su=true;

    public function hello()
    {
        return "beep";
    }




}
$bmw = new Car();
$mer=new Car();
$s=$bmw->color='blue' ;
echo $mer->hello();
echo $s;
//echo $r;

?>
