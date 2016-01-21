<?php

function FooBar($zmienna){
	if($zmienna % 3 == 0 && $zmienna % 5 == 0){
		echo('FOOBAR');
	}
	elseif($zmienna % 3 == 0){
		echo('Foo');
	}
	elseif($zmienna % 5 == 0){
		echo('Bar');
	}
	else{
		echo($zmienna);
	}
}

$x = 15;      // parametr do zmiany
$i = 1;

while($i <= $x){
	echo(FooBar($i));
	$i++;
}

?>