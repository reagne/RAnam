<?php

function mySin($x, $iterNum){
	$iteracje = ($iterNum * 2) - 1;
	for($i = 1; $i <= $iteracje; $i +=2){
		
	}
}

function Potega($a, $n){
	$potega = 1;
	for($j = 0; $j < $n; $j++){
		$potega = $potega * $a;
	}
	return $potega;
}

function IteracjaSin($iteracje){
	$maxI = ($iteracje * 2) - 1;
	return $maxI;
}
?>