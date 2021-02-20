<?php

	print_r($_GET['mydob']);

	if(isset($_POST['submit'])){

		$DATE_OF_BIRTH = $_POST['mydob'];
		

		if($DATE_OF_BIRTH == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?>