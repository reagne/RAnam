<?php

$num1 = -3;
$num2 = 2;
$num3 = 0;

if($num1 > $num2){
	if($num1 > $num3){
		echo ($num1);  // zawsze pamiętaj o nawiasach przy echo
	}
	else{
		echo ($num3);
	}
}
elseif($num2 > $num3){
	echo ($num2);
}
else{
	echo ($num3);
}

// Inny sposób na rozwiązanie

echo("<p>Inne rozwiazanie</p>");

if($num1 > $num2){
	if($num1 > $num3){
		echo ($num1);
	}
	else{
		echo ($num3);
	}
}
else{
	if($num2 > $num3){
		echo ($num2);
	}
	else{
		echo ($num3);
	}
}


?>