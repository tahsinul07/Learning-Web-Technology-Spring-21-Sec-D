<?php

session_start();
if(isset($_POST['login'])){
$username= $_POST['user_name'];
$password= $_POST['user_pass'];

if(empty($username)){
	
	echo "please enter a user name";
}
elseif(strlen($username)<2){
	
	echo "username must contain atleast 2 character";
}

if(empty($password)){
	
	echo "please enter a password";
}
elseif(strlen($password)<8){
	
	echo "password must contain atleast 8 character";
}
elseif($password=="@"||$password=="$"||$password=="#"||$password=="%"){
	
	echo "password must contain atleast a special character: (@, #, $, %)";
}



else{

	$user = $_SESSION['abc'];

			if($username == $user['username'] && $password == $user['password']){

				$_SESSION['status'] = true;
				header('location: dashboard.php');

			}
}

?>