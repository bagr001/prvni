<?php

define('CLASS_DIR', __DIR__ . '/Classes');
define('INTERFACE_DIR', __DIR__ . '/Interfaces');

define('EOL', '<br />');

include INTERFACE_DIR . '/IMath.php';
include CLASS_DIR . '/MyClass.php';
include CLASS_DIR . '/TestClass.php';

echo '[1]: ' . MyClass::foo() . EOL;
echo '[2]: ' . MyClass::foo() . EOL . EOL;

echo '[n + 1]: ' . TestClass::add(MyClass::x(), 1) . EOL . EOL;

echo '[n*n]: ' . TestClass::multiply(MyClass::foo()) . EOL . EOL;

echo '[sqrt(n)]: ' . TestClass::sqrt(MyClass::foo());
