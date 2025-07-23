--TEST--
Validation of internal autoloader (explicit lower case, using file-per-namespace)
--FILE--
<?php
spl_autoload_register('spl_autoload');
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'autoloading');
spl_autoload_names(SPL_AUTOLOAD_NAME_LOWERCASE | SPL_AUTOLOAD_NAME_NAMESPACE);
var_dump(\Test\Foo\Bar\Example::TYPE, \Test\Foo\Bar\Example2::TYPE);

?>
--EXPECT--
string(30) "Lower Case, Namespace, Example"
string(31) "Lower Case, Namespace, Example2"
