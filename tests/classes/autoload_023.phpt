--TEST--
Validation of internal autoloader (default lower case)
--FILE--
<?php
spl_autoload_register('spl_autoload');
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'autoloading');
var_dump(\Test\Foo\Bar\Example::TYPE, \Test\Foo\Bar\Example2::TYPE);

?>
--EXPECT--
string(19) "Lower Case, Example"
string(20) "Lower Case, Example2"
