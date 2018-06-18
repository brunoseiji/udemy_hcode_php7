<?php

$a = NULL;

$b = 8;

$c = 10;

echo $a ?? $b ?? $c;

/*
	Se $a estiver vazio, verifica o $b
	Se $b estiver vazio, verifica o $c
*/

?>