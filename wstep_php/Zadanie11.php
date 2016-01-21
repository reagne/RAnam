<?php

$n = 5;

for($j = $n + 1; $j > 0; $j--){
	for($i = 1; $i <= $n; $i++){
	    if(($j == $i && $i != 1) || ($j < $i && $j != 1)){
			//echo(' ');
			echo('<span style = "color: white">'.$i.'</span>');
		}
		else{
			echo($i);
		}
    }
    for($i = $n - 1; $i > 0; $i--){
	    if(($j == $i && $i != 1) || ($j < $i && $j != 1)){
			//echo(' ');
			echo('<span style = "color: white">'.$i.'</span>');
		}
		else{
			echo($i);
		}
    }
	echo('<br>');
}

?>