What is Type Hinting?

Type hinting means telling PHP what type of value (or object) a function/method expects in its parameters.
This helps:
Avoid mistakes (passing wrong type).
Make code easier to understand.
Get better autocompletion in IDEs.

With Type Hinting ✅

Since getname expects an object of class student, we can type-hint it:

class school {
// type-hint student
public function getname(student $names) 
    {
        foreach ($names->Names() as $name) {
echo $name . "<br>";
}
}
}

Now:
$names must be an object of student (or a subclass).
If you pass anything else, PHP throws a TypeError immediately.
🔎 What your code is doing:

1.  trait display
    trait display {
    public function info($name,$age) {
    echo "Name : " .$name. "<br>";
        echo "Age : " .$age."<br>";
    }

        public function result($cgpa) {
            echo "Display trait Result : ".$cgpa."<br>";
        }

    }

Has two methods:
info($name, $age) → shows name & age.
result($cgpa) → prints result (Display trait’s version).

2. trait show
   trait show {
   private function message($name) {
        echo " Welcome to ". $name."<br>";
    }
    public function result($cgpa) {
   echo "Show trait Result : ".$cgpa."<br>";
   }
   }

Has a private message() (so not directly accessible if used).
Has another result() (conflict with display::result). 3. class a using both traits
class a {
use show, display {
show::message as public; // ✅ change message() from private → public
display::result insteadof show; // ✅ use display's result() instead of show’s
show::result as cgpa; // ✅ give show’s result() a new alias "cgpa"
}
}

show::message as public;
→ Normally message() is private, now you made it public.
display::result insteadof show;
→ Conflict: both traits have result().
→ You told PHP: “Use display’s version instead of show’s”.
show::result as cgpa;
→ You still want to use show’s result(), so you gave it a new alias (cgpa).

4. Using the class
   $name = "Riad";
$test = new a();
   $test->message($name); // Welcome to Riad
   $test->info($name ,25); // Name + Age (from display)
   $test->result(3.80);          // Display trait Result
$test->cgpa(3.9); // Show trait Result

✅ Output
Welcome to Riad
Name : Riad
Age : 25
Display trait Result : 3.8
Show trait Result : 3.9

🧠 Key Concepts You Used
Access modifier change in trait
Made message() from private → public.
Method conflict resolution
Both show and display had result().
You chose display::result insteadof show.
Alias for trait methods
Used show::result as cgpa so you can still access it with a new name.

👉 This is a textbook example of trait usage:
conflict resolution
access modifier change
aliasing

📂 File 1 (file1.php)

<?php
namespace pro;

class product {
    public function call() {
        echo "Come from File 1<br>";
        $test = new \test\product(); // global "test" namespace class
        $test->call();
    } 
}

function show() {
    echo "From Function";
}
?>

Declares namespace pro.

Defines pro\product class with call() method.

Inside call(), it creates an object of \test\product (from another namespace).

Defines a function pro\show().

📂 File 2 (file2.php)

<?php
namespace test {
    class product {
        public function call() {
            echo "Come from File 2 <br>";
        } 
    }
}
?>

Declares namespace test.

Defines test\product class with its own call() method.

📂 File 3 (main.php)

<?php
require 'file1.php';
require 'file2.php';

$obj = new pro\product();
$obj->call();

pro\show();
?>

Includes both files.

Creates an object of pro\product → calls its call() method.

That prints "Come from File 1".

Then inside it, calls \test\product->call() → prints "Come from File 2".

Finally calls pro\show() → prints "From Function".

🖨️ Output
Come from File 1
Come from File 2
From Function

🔑 Summary (short)

file1.php → namespace pro
Contains product class and show() function.

file2.php → namespace test
Contains another product class.

main.php
Uses both files.
pro\product::call() internally uses test\product.
Then pro\show() is called.

👉 This shows how namespaces prevent conflicts (same product class name in 2 files).

🔎 What is Method Chaining?

Method chaining means calling multiple methods on the same object in a single line.
Each method returns $this (the current object) so the next method can be called.
✅ Example: Method Chaining in PHP

<?php
class Student {
    private $name;
    private $age;
    private $cgpa;

    public function setName($name) {
        $this->name = $name;
        return $this; // return object for chaining
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }

    public function setCgpa($cgpa) {
        $this->cgpa = $cgpa;
        return $this;
    }

    public function showInfo() {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
        echo "CGPA: {$this->cgpa}<br>";
        return $this;
    }
}

$stu = new Student();
$stu->setName("Riad")
    ->setAge(22)
    ->setCgpa(3.85)
    ->showInfo();
?>

Key Points
\_\_destruct() takes no arguments.
Called automatically at the end of script execution.
Useful for cleanup tasks:
Closing files
Freeing memory
Closing DB connections
