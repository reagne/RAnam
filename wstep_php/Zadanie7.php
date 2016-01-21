<?php

$x = 5;     // jeżeli zwiększymy liczbę do np. 4000 to w wyniku pojawi nam się INF, który oznacza Infinity

// FOR

$silnia = 1;
echo("Uzycie FOR<br>");
for($i = 1; $i <= $x; $i = $i + 1){
	$silnia = $silnia * $i;
}
echo("Wartosc silni dla $x wynosi $silnia<br><br>");

// WHILE

$silnia = 1;  // ponownie trzeba określic silnię (wyzerować ją) oraz i
$i = 1;
echo("Uzycie WHILE<br>");
while($i <= $x){
	$silnia = $silnia * $i;
	$i = $i + 1;					// ułożenie linijek ma bardzo duże znaczenie!!!
}
echo("Wartosc silni dla $x wynosi $silnia");

?>