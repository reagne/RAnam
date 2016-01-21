<?php

$n = 5;

for($i = 0; $i < $n; $i = $i + 1){
	for($j = 0; $j < $n; $j = $j + 1){
		echo("*");
	}
	echo("<br>");
}

echo("<br>");

//Pierwsza część trójkącika
for($i = 0; $i < $n; $i = $i + 1){
	for($j = 0; $j <= $i; $j = $j + 1){
		echo("*");
	}
	echo("<br>");
}
// Druga część trójkącika
for($i = 0; $i < $n; $i = $i + 1){
	for($j = $i; $j < $n; $j = $j + 1){
		echo("*");
	}
	echo("<br>");
}
//LUB
for($i = 0; $i < $n; $i = $i + 1){
	for($j = 0; $j < ($n - $i); $j = $j + 1){
		echo("*");
	}
	echo("<br>");
}
//LUB
for($i = $n; $i > 0; $i = $i - 1){
	for($j = 0; $j < $i; $j = $j + 1){
		echo("*");
	}
	echo("<br>");
}

?>