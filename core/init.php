<?php

//ini_set("session.cookie_lifetime",15);
session_start();
session_regenerate_id();

//autoloadern ime klase=imenu datoteke casesensitive(možda nije)
spl_autoload_register(function ($class){
	require_once 'classes/'.$class.'.php';
}
);

require_once 'functions/sanitize.php';