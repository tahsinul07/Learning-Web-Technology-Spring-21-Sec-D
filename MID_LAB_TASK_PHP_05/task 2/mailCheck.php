<?php

	print_r($_GET['mymail']);

	if(isset($_POST['submit'])){

		$Email = $_POST['mymail'];
		

		if($Email == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?>