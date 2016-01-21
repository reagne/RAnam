<?php

$iteracje = 3;            // ilość pożądanych iteracji
$znakDzialania = true;    // ponieważ dla true zakładamy liczbę dodatnią, więc od true zaczynamy
$pi = 0;

function NrIteracji($iteracje){    // funkcja wyliczająca maksymalną ilość $i dla pętli
	$maxI = ($iteracje * 2) - 1;
	return $maxI;
}

for($i = 1;  $i <= NrIteracji($iteracje); $i += 2){ 
    if($znakDzialania == false){
		$licznik = -1;
		$znakDzialania = true;
	}
	else{
		$licznik = 1;
		$znakDzialania = false;
	}
	$wynikNawias += ($licznik / $i);
}

$pi = 4 * $wynikNawias;
echo($pi);

/*
$flag = false;                 // podpowiedź z zajęć dotycząca zmienności działania

for($i = 0; $i < 10; $i++){
	if($flag == false){
		echo("Odejmuje");
		$flag = true;
	}
	else{
		echo("Dodaje");
		$flag = false;
	}
}
*/

?>