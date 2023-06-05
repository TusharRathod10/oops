<?php

trait t1
{
    function fun1()
    {
        echo "fun1";
    }
}

trait t2
{
    function fun1()
    {
        echo "fun2";
    }
}

class class1
{
    use t1, t2 {
        t1::fun1 insteadof t2; // using for t1 
        t2::fun1 as animal;
    }
}
class class2
{
    use t1, t2 {
        t2::fun1 insteadof t1; // using for t2
        t1::fun1 as animal;//function nickname
    }
}

$object = new class1();
$object->animal();
$object = new class2();
$object->animal();
?>