<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Vojta
 */
interface ICount {

	public static function inc($n = 1);

	public static function dec($n = 1);

	public static function count();
	
}
