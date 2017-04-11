<?php

	require_once 'core/init.php';

	//echo '<pre>';
	//print_r(Config::get('config/session'));

	//require_once 'includes/layout/header.php';
	Helper::getHeader('Algebra Contacts');
	//Helper::getHeader('Algebra Contacts','header-nav')
	
	
	//$db=DB::getInstance()->query("SELECT * FROM users WHERE id=10");
	//$db=DB::getInstance()->query("INSERT INTO user username, password, name VALUES (?,?,?)");
	//bindamo vrijednosti da nam netko ne napravi SQL Injection
	//$db=DB::getInstance()->query("SELECT * FROM users WHERE id=?");
	//$db=DB::getInstance()->query("SELECT * FROM users WHERE" array('id','=','10'));
	//$db=DB::getInstance()->query("SELECT * FROM users WHERE" array(2, 'Pero'));		
	//$db=DB::getInstance()->query("SELECT * FROM users");	
	//$db=DB::getInstance()->query("SELECT * FROM users WHERE id=? AND name=?", array(2, 'Pero'));
	
	
	//$db=DB::getInstance()->get('*','users',array('name','=','Pero'));
	
	//$db=DB::getInstance()->delete ('users', array('id', '=', '4'));
	
	/*
	//$db=DB::getInstance()->insert('users', array(
	'name'=>'Marko Markic',
	'username'=>'Marko',
	'password'=>'123456789', 
	'salt'=>'knbasign',
	'role_id'=>1));
	*/
	//"INSERT INTO users(name, username, password, salt) VALUES (?,?,?,?)"
	//"UPDATE users SET name=?, username=? WHERE id=7";
	
	/*
	//$db=DB::getInstance()->update('users', 4, array(
	'name'=>'Iva Ivic',
	'username'=>'Iva'));
	*/

	//echo '<pre>';
	//var_dump($db);
	
	//$db=new DB(); neće raditi jer je instanca privatna
	//var_dump($db->error());
	/*
	if($db->count()>0){
	foreach ($db->results() as $result) {
		echo $result->name;
	}
	}else {
		echo 'Trenutno nema podataka u bazi!!!';
	}
	*/
?>

    <h1>
		<div class="row">        
			<div class="col-md-8 col-md-offset-2">            
				<div class="jumbotron">                
					<div class="container">                    
						<h1>Algebra Contacts</h1>                    
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et dolor sapien. Morbi faucibus, lacus a ornare finibus, justo nisl interdum turpis, et ornare diam libero eget leo.</p>                    
						<p>                        
							<a class="btn btn-primary btn-lg" href="login.php" role="button">Sign In</a>                        
							or                        
							<a class="btn btn-primary btn-lg" href="register.php" role="button">Create an account</a>                    
						</p>      
					</div>
				</div>
			</div>
		</div>
	</h1>
	
<?php
	//require_once 'includes/layout/footer.php';
	Helper::getFooter();
?>