<?php

function Fibonacci($wartosc){
	$wynikPast2 = 0;                  // wynik liczby poprzedniej od poprzedniej :)
	$wynikPast1 = 1;                  // wynik liczby poprzedniej
	for($i = 0; $i <= $wartosc; $i++){
		if($i == 0){
		    echo($i.' = '.$wynikPast2.'<br>');
	    }
	    elseif($i == 1){
			echo($i.' = '.$wynikPast1.'<br>');
		}
		else{
			$wynikTemp = $wynikPast1;                   // przechowanie starego wyniku, aby móc stworzyć nowy $wynikPast1 i jednocześnie się później odwołać do starego
			$wynikPast1 = $wynikPast1 + $wynikPast2;    // nowa wartosc wynikuPast1, która w danym momencie jest tak naprawdę wynikiemNow
			echo($i.' = '.$wynikPast1.'<br>');
			$wynikPast2 = $wynikTemp;                   // nowa wartość wynikuPast2
		}
	}
}

$twojaLiczba = 19;
Fibonacci($twojaLiczba);

?>