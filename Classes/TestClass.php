<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestClass
 *
 * @author Vojta
 */
class TestClass implements IMath {

	public static function add($a, $b, $c = 0, $d = 0) {
		return $a + $b + $c + $d;
	}

	public static function multiply($a, $b, $c = 0, $d = 0) {
		return $a * $b * $c * $d;
	}

}
