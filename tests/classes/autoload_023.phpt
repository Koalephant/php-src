--TEST--
Validation of internal autoloader (basic use)
--FILE--
<?php
spl_autoload_register('spl_autoload');
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'autoloading');
spl_autoload_names(SPL_AUTOLOAD_NAME_NATURAL);
var_dump(\Test\Foo\Bar\Example::TYPE, \Test\Foo\Bar\Example2::TYPE);

?>
--EXPECT--
string(21) "Natural Case, Example"
string(22) "Natural Case, Example2"
