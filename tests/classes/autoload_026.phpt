--TEST--
Validation of internal autoloader (upper case)
--FILE--
<?php
spl_autoload_register('spl_autoload');
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'autoloading');
spl_autoload_names(SPL_AUTOLOAD_NAME_UPPERCASE);
var_dump(\Test\Foo\Bar\Example::TYPE, \Test\Foo\Bar\Example2::TYPE);

?>
--EXPECT--
string(19) "Upper Case, Example"
string(20) "Upper Case, Example2"
