<?php

class person{
    public static $name = "Riyad ";
    // $name = "Riyad ";

    public static function show()
    {
        echo self::$name; // static variable print in own classes
        echo static::$name; // variable value rewrite from extendes class or derive class 
        
    }
    
}

class account extends person{

    public static $name = "Metul ";

    public  function display()
    {
        echo parent::$name; // value for parent classes
    }
}

account::show();
$test = new account();
$test->display();
?>