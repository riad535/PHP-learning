✅ Code 1: Interface, Inheritance & Polymorphism

🔑 Key Concepts Learned
Interface (i) → Forces implementing classes to define certain methods (dev() in this case).
Constructor (\_\_construct) → Initializes object properties ($c and $d).
Inheritance (extends) → Class b inherits properties & methods from class a.
Polymorphism → Class b extends a and adds its own behavior (cal2()).
Encapsulation → Properties $c and $d are kept inside the class but accessible through methods.

Code 2: Static Properties, Methods & self vs static vs parent

🔑 Key Concepts Learned

Static Properties & Methods → Belong to the class itself, not the object instance.
self:: → Always refers to the class where it’s written (fixed reference).
static:: → Uses late static binding, so it can be overridden by child classes.(Lata Static Binding)
parent:: → Accesses methods/properties from the parent class.

📚 Overall OOP Learning

By writing these codes, you practiced:

✅ Interfaces (contract for classes)
✅ Constructors (initialize objects)
✅ Inheritance & Method Extension
✅ Static Methods & Properties
✅ self, static, parent keywords
✅ Polymorphism & Code Reusability

Traits in PHP

🔎 What is a Trait?
A Trait in PHP is a way to reuse code across multiple classes.
It allows you to write methods once and then "import" them into different classes using use.
Traits help when multiple classes need the same functionality, but inheritance alone isn’t enough (since PHP supports only single inheritance).

🔑 Key Points from Code

trait display → Defines methods info() and result().
trait show → Defines method message().
class a and class b → Both use the traits show and display.
This allows both classes to share the same methods without rewriting them.

With traits, you learned how to:
✅ Reuse methods across multiple classes.
✅ Reduce code duplication.
✅ Extend class functionality without inheritance.
