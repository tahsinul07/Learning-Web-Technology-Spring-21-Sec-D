<?php

	print_r($_GET['myname']);

	if(isset($_POST['submit'])){

		$name = $_POST['myname'];
		

		if($name == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?