<?php

define('CLASS_DIR', __DIR__ . '/Classes');
define('INTERFACE_DIR', __DIR__ . '/Interfaces');

define('EOL', '<br />');

include INTERFACE_DIR . '/IMath.php';
include INTERFACE_DIR . '/ICount.php';
include CLASS_DIR . '/TestClass.php';
include CLASS_DIR . '/Counter.php';

echo '[1]: ' . Counter::inc() . EOL;
echo '[2]: ' . Counter::inc() . EOL . EOL;

echo '[n + 1]: ' . TestClass::add(Counter::count(), 1) . EOL . EOL;

echo '[n*n]: ' . TestClass::multiply(Counter::inc()) . EOL . EOL;

echo '[sqrt(n)]: ' . TestClass::sqrt(Counter::inc()) . EOL . EOL;

echo '[count 3]: ' . Counter::count() . EOL . EOL;
