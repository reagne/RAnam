<?php

$n = 5;

for($i = 1; $i <= $n; $i = $i + 1){
	for($j = 1; $j <= $n; $j = $j + 1){
		if($j <= $i){
			echo("*");
		}
		else{
			echo($j);
		}
	}
	echo("<br>");
}
for($i = $n; $i > 0; $i = $i - 1){
	for($j = 1; $j <= $n; $j = $j + 1){
		if($j <= $i){
			echo("*");
		}
		else{
			echo($j);
		}
	}
	echo("<br>");
}

?>