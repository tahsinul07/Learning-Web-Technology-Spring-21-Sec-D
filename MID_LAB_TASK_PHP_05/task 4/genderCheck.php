<?php

	print_r($_GET['mygender']);

	if(isset($_POST['submit'])){

		$Gender = $_POST['mygender'];
		

		if($Gender == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?>