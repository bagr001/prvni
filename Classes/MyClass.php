<?php

/**
 * Description of MyClass
 *
 * @author Vojtěch Lank
 */
class MyClass {

	private static $x = 0;

	public static function foo() {
		return ++self::$x;
	}

	public static function x() {
		return self::$x;
	}

}
