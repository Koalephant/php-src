--TEST--
Validation of internal autoloader (no case change, using file-per-namespace)
--FILE--
<?php
spl_autoload_register('spl_autoload');
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'autoloading');
spl_autoload_names(SPL_AUTOLOAD_NAME_NATURAL | SPL_AUTOLOAD_NAME_NAMESPACE);
var_dump(\Test\Foo\Bar\Example::TYPE, \Test\Foo\Bar\Example2::TYPE);

?>
--EXPECT--
string(32) "Natural Case, Namespace, Example"
string(33) "Natural Case, Namespace, Example2"
