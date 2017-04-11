<?php

class Config
{
	private function __construct(){}  //sprečavanje instance preko new Config
	private function __clone(){}
	
	public static function get($path=null)
	{
		if($path){
			$items = require_once $path.'.php';	

			return $items;
		}
		//die('Nema putanje');
		return false;
	}
	
}