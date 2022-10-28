<?php

$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];
$type = $_REQUEST['type'];
$email= $_REQUEST['email'];
if($name == null || $password == null  ||$email==null){
	echo "INVALID";

}else{
		$user = $name."|".$password."|".$email."|".$type."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create'){
			header('location: home.php');
		}else{
			header('location: login.html');			
		}

}
?>