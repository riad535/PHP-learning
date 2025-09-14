📝 PHP get\_\* Functions — Quick Notes

get_class($object)
➜ Returns the class name of the given object.

get_parent_class($object/class)
➜ Returns the parent class name of the given object or class.

get_class_methods($class/object)
➜ Returns an array of method names defined in the given class.

get_class_vars($class)
➜ Returns an associative array of the default properties of the class (with their default values).

get_object_vars($object)
➜ Returns an associative array of accessible (public) properties and their current values of an object.

get_called_class()
➜ Returns the name of the class the static method was called in (used inside static context).

get_declared_classes()
➜ Returns an array of all declared class names currently loaded.

get_declared_interfaces()
➜ Returns an array of all declared interface names currently loaded.

get_declared_traits()
➜ Returns an array of all declared trait names currently loaded.

class_alias($original, $alias)
➜ Creates an alias (alternative name) for a class at runtime.
