<?php

function Potega($a, $n){
	$potega = 1;
	for($i = 0; $i < $n; $i++){
		$potega = $potega * $a;
	}
	return $potega;
}

echo(Potega(2, 2));

?>