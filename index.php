<?php

include './Classes/MyClass.php';
include './Classes/TestClass.php.php';

echo '[1]: ' . MyClass::foo();
echo '[2]: ' . MyClass::foo();

echo '[n + 1]: ' . TestClass::add(MyClass::x(), 1);