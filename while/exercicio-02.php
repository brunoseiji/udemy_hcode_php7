<?php 
// Como podemos aplicar uma regra onde se a variável $status for verdadeira, a variável $liberado recebar o valor 1, senão $liberado deve receber 0?

$status = true;

if($status == true) {

	$liberado = 1;

} else {

	$liberado = 0;
}

echo $liberado;

?>