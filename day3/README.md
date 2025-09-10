# 🐘 PHP Magic Methods Cheat Sheet

PHP provides special **magic methods** that start with `__` (double underscores).  
They are automatically called in certain situations.

---

## 1. `__construct()`

Called when an object is created.

```php
class Test {
    function __construct() {
        echo "Object created<br>";
    }
}
$obj = new Test();
// Output: Object created
2. __destruct()
Called when object is destroyed (usually at script end).

php
Copy code
class Test {
    function __destruct() {
        echo "Object destroyed<br>";
    }
}
$obj = new Test();
// Output: Object destroyed
3. __get($name)
Access undefined/private property.

php
Copy code
class Test {
    private $data = "Secret";
    function __get($name) {
        return "Trying to access $name!";
    }
}
$obj = new Test();
echo $obj->data;
// Output: Trying to access data!
4. __set($name, $value)
Set undefined/private property.

php
Copy code
class Test {
    private $hidden;
    function __set($name, $value) {
        echo "Setting $name = $value<br>";
    }
}
$obj = new Test();
$obj->hidden = "Hello";
// Output: Setting hidden = Hello
5. __isset($name)
Check isset() or empty() on undefined/private property.

php
Copy code
class Test {
    private $secret = "yes";
    function __isset($name) {
        return isset($this->$name);
    }
}
$obj = new Test();
var_dump(isset($obj->secret));
// Output: bool(true)
6. __unset($name)
Unset undefined/private property.

php
Copy code
class Test {
    private $data = "Hello";
    function __unset($name) {
        echo "$name unset called<br>";
    }
}
$obj = new Test();
unset($obj->data);
// Output: data unset called
7. __autoload($class) (deprecated, use spl_autoload_register)
Automatically loads missing classes.

php
Copy code
function __autoload($class) {
    echo "Loading class: $class<br>";
}
$obj = new MissingClass();
// Output: Loading class: MissingClass
8. __clone()
Called when object is cloned.

php
Copy code
class Test {
    function __clone() {
        echo "Object cloned<br>";
    }
}
$obj1 = new Test();
$obj2 = clone $obj1;
// Output: Object cloned
9. __sleep()
Called before serialize().

php
Copy code
class Test {
    public $a = 1, $b = 2;
    function __sleep() {
        echo "Preparing to serialize<br>";
        return ['a']; // only serialize $a
    }
}
$obj = new Test();
serialize($obj);
// Output: Preparing to serialize
10. __wakeup()
Called when unserialize() is used.

php
Copy code
class Test {
    function __wakeup() {
        echo "Object restored<br>";
    }
}
$obj = new Test();
$s = serialize($obj);
unserialize($s);
// Output: Object restored
11. __call($name, $args)
Call undefined/non-accessible method.

php
Copy code
class Test {
    function __call($name, $args) {
        echo "Method $name called with args: " . implode(", ", $args);
    }
}
$obj = new Test();
$obj->hello("PHP", "World");
// Output: Method hello called with args: PHP, World
12. __callStatic($name, $args)
Call undefined static methods.

php
Copy code
class Test {
    static function __callStatic($name, $args) {
        echo "Static method $name called with: " . implode(", ", $args);
    }
}
Test::greet("Hi", "All");
// Output: Static method greet called with: Hi, All
13. __toString()
Object used as string.

php
Copy code
class Test {
    function __toString() {
        return "This is Test object";
    }
}
$obj = new Test();
echo $obj;
// Output: This is Test object
14. __invoke()
Object used as function.

php
Copy code
class Test {
    function __invoke($x) {
        return "You passed $x";
    }
}
$obj = new Test();
echo $obj(5);
// Output: You passed 5
✅ Now you have a quick revision guide for all PHP Magic Methods.

yaml
Copy code

---

Do you want me to also **make a compact table at the end** (method → when it triggers → one-line example) for **su
```
