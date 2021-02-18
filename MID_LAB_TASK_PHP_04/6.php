<?php
$array = [ "H" , "O" , "Q" , "U" , "E"  ] ;

$find = "Q" ;
$count = 0 ;

for ($i = 0 ; $i < count($array) ; $i ++ ) { 
	if( $array [ $i ] === $find ){
		echo $find. " is in " .$i. " number index \n \n <br> <br>";
		$count = $count + 1 ;
	}
		}
		if ($count === 0) {
			 echo  "Couldn't find any match \n \n  <br>";
		}
?>