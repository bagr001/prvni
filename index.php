<?php

define('CLASS_DIR', __DIR__ . '/Classes');
define('INTERFACE_DIR', __DIR__ . '/Interfaces');

include INTERFACE_DIR . '/IMath.php';
include CLASS_DIR . '/MyClass.php';
include CLASS_DIR . '/TestClass.php';

echo '[1]: ' . MyClass::foo();
echo '[2]: ' . MyClass::foo();

echo '[n + 1]: ' . TestClass::add(MyClass::x(), 1);
