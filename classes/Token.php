<?php

class Token {
    public static function generate() {
        return Session::put(Config::get('config/session')['sessions']['token_name'], sha1(uniqid()));
    }

    public static function check($token) {
        $tokenName = Config::get('config/session')['sessions']['token_name'];

        if(Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }
        return false;
    }
}





/* Neki moji pokušaji
class Token
{
	private $_token;
	
	

	public function __construct()
	{
		$this->_token=Config::get('config/session');
   	    $tokenName = $this->_token['sessions']['token_name'];
		

		if (isset($_SESSION[$tokenName])){
		
}
*/
