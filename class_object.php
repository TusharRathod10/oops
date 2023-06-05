<?php
//Inside the class (by adding a set_name() method and use $this):
class Fruit
{
    public $name;
    function set_name($name)
    {
        $this->name = $name;
    }
}
$apple = new Fruit();
$apple->set_name("Apple");

echo $apple->name;
echo "<br>";

//Outside the class (by directly changing the property value):
class Fruit1
{
    public $name;
}
$apple = new Fruit1();
$apple->name = "Apple";

echo $apple->name;
?>