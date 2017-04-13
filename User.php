<?php

class User
{
	private $_db = null;

	public function __construct()
	{
		$this->_db = DB::getInstance();
	}

	public static function registration($fields = array())
	{
    if (DB::getInstance()->insert("users", $fields)) {
			return true;
		}
		throw new Exception('Problem creating user account');
		}

}



	/*
	public static function registration($fields=array(
		'name'=>Input::get('name'),
		'username'=>Input::get('username'),
		'password'=>$password,
		'salt'=>$salt,
		'role_id'=>1));

		{
			$this->_user = $this->_db->insert('users', $fields);
		}

		public function user()
		{
        return $this->_user;
			}


*/
