<?php

function Doskonala($liczba){
	$sumaDzielnikow = 0;
	for($liczbaNow = 1; $liczbaNow <= $liczba; $liczbaNow++){           // pętla określająca rozpatrująca przypadki poszczególnych liczb po kolei, aż do podanej do funkcji liczby
		for($j = 1; $j < $liczbaNow; $j++){                             // pętla do wyliczania sumy dla każdej liczby po kolei
			if($liczbaNow % $j == 0 ){
				$sumaDzielnikow = $sumaDzielnikow + $j;
			}
			// echo("$sumaDzielnikow i $liczbaNow <br>");
		}
		// wyświetlanie dla liczbyNow
		if($sumaDzielnikow == $liczbaNow && $liczbaNow != 1){           // nie wiedziałam co zrobić z jedynką, więc ją wykluczyłam
			echo("$liczbaNow to liczba doskonala<br>");
		}
		elseif($sumaDzielnikow < $liczbaNow && $liczbaNow != 1){
			echo("$liczbaNow to liczba niekompletna<br>");
		}
		else{
			echo("$liczbaNow nie jest to liczba doskonala ani niekompletna<br>");
		}
		$sumaDzielnikow = 0;                                            // wyzerowanie sumy, aby mogła się liczyć od początku dla kolejnej liczby
	}
}

$twojaLiczba = 10;
Doskonala($twojaLiczba);

?>