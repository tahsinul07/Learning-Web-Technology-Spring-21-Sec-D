<?php
$star = "*" ;
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
         echo $star;
	}
	echo "\n <br>";
}
echo "\n \n <br> <br>";
$star = 1;
for ( $row = 3 ; $row != 0 ; $row -- ) { 
	for ($column = 0 ; $column < $row  ; $column ++ ) {
        
         echo $star ;
         $star++ ;
	}
	$star = 1 ;
	echo "\n <br>" ;
}

echo "\n \n <br> ";


$array = [ "A" , "B" , "C" ];
for ( $row = 0 ; $row < 3 ; $row ++ ) { 
	for ($column = 0 ; $column <= $row  ; $column ++ ) {
        echo $array[$column] ; 
	}
	echo "\n <br>";
}
echo "\n \n <br> <br>";
?>