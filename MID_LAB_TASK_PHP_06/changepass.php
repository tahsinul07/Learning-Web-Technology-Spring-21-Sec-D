<?php

if(isset($_POST['submit'])){
$old_pass= $_POST['old_pass'];
$new_pass= $_POST['new_pass'];
$re_pass= $_POST['re_pass'];

if(($old_pass)==($new_pass)){
	
	echo "password cannot be same as before";
}
elseif(($old_pass)==($re_pass)){
	
	echo "password updated";
}

elseif(($old_pass)!=($re_pass)){
	
	echo "password do not match";
}

?>