<?php

	print_r($_GET['degree']);

	if(isset($_POST['submit'])){

		$Degree = $_POST['degree'];
		

		if($Degree == "" ){
			echo "null submission...";
		}else{
			echo "success";
		}

	}else{
		echo "invalid request...";
	}
?>