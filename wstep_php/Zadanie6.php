<?php

$noOfDraws = 1;
$random = rand(0,20);

while($random != 10){     
	echo ("$random - Zla liczba<br>");                // NIE RÓWNY != lub <>
													// jeżeli używamy cudzysłowa możemy zmienne wstawić bez użycia kropek, jeżeli w apostofach to trzeba używać kropek
	$noOfDraws = $noOfDraws + 1;
	$random = rand(0,20);
}
echo("Poprawna liczba.</br>Liczba losowan wynosi ".$noOfDraws."<br>")

?>