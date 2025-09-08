
<?php

interface i {
  function dev();
}

class a implements i{
  public $c,$d;

  public function __construct($s , $t)
  {
    $this->c = $s;
    $this->d = $t;
  }
  public function cal()
  {
    echo "Class A result : " . $this->c + $this->d . "<br>" . $this->c * $this->d . " <br>";
   
  }
  public function dev()
  {
    echo " Dev function result :" . $this->c / $this-> d;
  }
}

class b extends a{
  
  public function cal2($e)
  {
    echo "Class B result : " . $this->c + $this->d + $e . "<br>" . $this->c * $this->d * $e ;
  }
}



$test = new b(10,5);
$test->cal();
$test-> dev();
echo "<br>";
$test->cal2(2);
// $test2 = new b(7,3);
// $test2->cal2(3);


?>

