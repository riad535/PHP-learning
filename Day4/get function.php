<?php
class abc {
    public $a =  94.45;
    public $b = 100;
    public $c = "Riad";
    private $d = ";kajds;kjb;aksbdv;kjbawsbv";
    function show(){
        print_r(get_class_vars(get_class($this)));
        echo "<br>";
    }
}

$test = new abc();
$test->show();
$f = get_class_vars(get_class($test));
print_r($f);


?>