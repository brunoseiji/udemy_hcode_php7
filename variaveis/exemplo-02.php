<?php

$nome = "Bruno";

$sobrenome = "Menezes";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome;

echo "<br/>";

unset($nome);

if (isset($nome)) {

	echo $nome;
}

?>