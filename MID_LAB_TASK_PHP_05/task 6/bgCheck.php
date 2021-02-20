<?php

	print_r($_GET['myblood']);

	if(isset($_POST['submit'])){

		$blood_group = $_POST['myblood'];
		

		if($blood_group == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?>