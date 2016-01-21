<?php

function LiczbaPierwsza($liczba){
	$czyPierwsza = 0;
	for($i = 2; $i < $liczba; $i++){    // i zaczyna się od 2 ponieważ: 1) przez 0 nie dzielimy, 2) nie opłaca nam się dzielić przez jeden, bo każda liczba jest podzielna przez jeden i samą siebie - stąd także i jest mniejsze od liczby, ale nie jest jej równe.
		if($liczba % $i == 0){
			$czyPierwsza++;            // jeżeli liczba jest przez jakąś inna podzielna to zmienna $czyPierwsza będzie rosnąć
		}
	}
	if($czyPierwsza == 0){
		echo("Liczba $liczba jest liczba pierwsza.");
	}
	else{
		echo("Liczba $liczba nie jest liczba pierwsza.");
	}
}

LiczbaPierwsza(7);

?>