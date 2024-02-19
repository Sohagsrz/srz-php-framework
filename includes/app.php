<?php
require 'functions.php';


global $nonceUtil,$title,$current;
//env load
$dotenv = Dotenv\Dotenv::createImmutable(app_dir);
$dotenv->safeLoad();
 

//connect db
require 'database.php';

$router = new AltoRouter();

$router->map('GET|POST','/', function(){ 

	include app_dir.'/themes/index.php';
},'home');

$router->map('GET|POST','/about', function(){
	include app_dir.'/themes/about.php';
},'about');

 

$router->map('GET','/register', function(){
	if(auth()->isLoggedIn()){
			redirect('/dashboard');
		}
		include app_dir.'/themes/register.php';
	},'register');
$router->map('POST','/register', function(){
	if(auth()->isLoggedIn()){
		redirect('/dashboard');
	}
	include app_dir.'/themes/proccess/register.php';
});

$router->map('GET','/login', function(){
	if(auth()->isLoggedIn()){
		redirect('/dashboard');
	}
	include app_dir.'/themes/login.php';
},'login');


$router->map('GET','/reset-password', function(){
	if(auth()->isLoggedIn()){
		redirect('/dashboard');
	}
	include app_dir.'/themes/resetPassword.php';
},'reset-password');

$router->map('POST','/login', function(){
	
	if(auth()->isLoggedIn()){
	redirect('/dashboard');
}
	include app_dir.'/themes/proccess/login.php';
});

$router->map('GET|POST','/oauth', function(){
	
	if(auth()->isLoggedIn()){
	redirect('/dashboard');
}
	include app_dir.'/themes/proccess/google.php';
});

	
 
if(auth()->isLoggedIn()){
 

	if(is_admin()){ 

	}

		 
	$router->map('GET|POST','/logout', function(){
		
		auth()->logOut();
		redirect('/');
	});

}







$match = $router->match();
$current= $match['name'];

if (is_array($match) && is_callable($match['target'])) {
	call_user_func_array($match['target'], $match['params']);
} else {
	// no route was matched
	http_response_code(404);
	include app_dir.'/themes/404.php';
}
