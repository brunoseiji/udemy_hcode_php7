<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

/*
	json_encode: transforma o array em json
	json_decode: transforma o json em um array

*/
 ?>