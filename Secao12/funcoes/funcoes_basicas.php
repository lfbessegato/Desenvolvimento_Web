<?php

//isset()
$valor = 'Luciano';

if(isset($valor)) {
    echo 'Variavel iniciada';
}

echo '<br />';
// empty()
// true -> '', 0, '0', false, null, array()
$valor1 = array();
if (empty($valor1)){
    echo 'Variável vazia';
}

echo '<br />';
// isnumeric()

$valor2 = 0;
if (empty($valor2)){
    echo 'Variável numerico';
}

?>