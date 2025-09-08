<?php

trait display
{
    public function info($name,$age)
    {
        echo "Name : " .$name. "<br>";
        echo "Age : " .$age."<br>";

    }

    public function result($cgpa)
    {
        echo "Result : ".$cgpa."<br>";
    }
    
}

trait show {
    public function message($name)
    {
        echo " Welcome to ". $name."<br>";
    }
}

class a{
    use show;
    use display;
}

class b{
    use show;
    use display;
}

$name = "Riad";

$test = new a();
$test->message($name);
$test->info($name ,25);
$test->result(3.80);

$test2 = new b();
$test2->info("Metul",22);
$test2->result(3.90);

?>