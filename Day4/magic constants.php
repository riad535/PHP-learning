<?php
namespace magic;
trait TraitName
{
    function display(){
        echo "Trait name : ".__TRAIT__."<br>";
    }
}

class magicConstants{
    use TraitName;
    public function show()
    {
        echo "Class name : ".__CLASS__."<br>";
        echo "Method name : ".__METHOD__."<br>";
        $this->display();
        echo "Namespace name : ".__NAMESPACE__."<br>";
        echo "Function name : ".__FUNCTION__."<br>";
    }
} 
echo "Line Number : ".__LINE__."<br>";
echo "File Path : ".__FILE__."<br>";
echo "Folder Path : ".__DIR__."<br>";

$test = new magicConstants();
$test->show();


?>