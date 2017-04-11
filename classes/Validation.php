<?php

class Validation
{
	
	private $_passed = false;
	private $_errors = array();
	private $_db = null;
	
	public function __construct()
	{
		$this->_db = DB::getInstance();
	}
	
	public function check($items=array())
	{
		
		foreach ($items as $item => $rules){
			foreach ($rules as $rule => $rule_value){
				
				$item = escape($item);
				$value = trim($_POST[$item]);
				
				$item_print = $this->underscore($item);
				
				if($rule==='required'&& empty($value)){
					$this->addError($item,"Field {$item_print} is required.");
				} else if (!empty($value)){
					switch($rule){
						case 'min':
							if(strlen($value) < $rule_value){
								$this->addError($item, "Field {$item_print} must have a minimum of {$rule_value} characters.");
							}
						break;
						case 'max':
							if(strlen($value) > $rule_value){
								$this->addError($item, "Field {$item_print} must have a maximum of {$rule_value} characters.");
							}
						break;
						case 'matches':
							if ($value != $_POST[$rule_value]){
								$this->addError($item, "Field {$item_print} must match {$rule_value}.");
							}
						break;
						case 'unique':
							$check = $this->_db->get('id', $rule_value, array($item, '=', $value));
							if($check->count()){
								$this->addError($item, "{$item_print} already exists.");
							}
						break;
						case 'special_char':
							if(!preg_match($rule_value ,$value)) {
								if ($item === 'name'){
									$this->addError($item, "Field {$item_print} allowes only letters and white spaces.");
                                }elseif ($item === 'password') {
                                        $this->addError($item, "Field {$item_print} must include at least one uppercase letter, one lowercase letter, one number, and one special character.");
                                }
							}
						break;			
								
								
					}						
				}
			}
		}
	
		
		if (empty($this->_errors)){
			$this->_passed=true;
		}	
			return $this;		
			
	}
	
		private function addError($item, $error)
		{
			$this->_errors[$item] = $error;
		}
		
		private function underscore($item)
		{
			if(preg_match("/_/", $item)){
			$item = ucwords(str_replace('_', ' ', $item));
			return $item;
		} 	else
			return ucwords($item);
		}
		
		
		public function hasError($field)
		{
			if(isset($this->_errors[$field])){
				return $this->_errors[$field];
			}
			return false;
		}
		
		public function errors()
		{
			return $this->_errors;
		}
		
		public function passed()
		{
			return $this->_passed;
		}
		
			//echo '<pre>';
			//echo $item.'<br>';
			//var_dump($validate);
			//echo '<pre>';	
}

