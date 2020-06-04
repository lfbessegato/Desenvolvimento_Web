<?php 

function primeira_funcao() {
    echo "Curso de PHP";
}

// Caracteres Especiais "_"
// Não começar com numeros

// Função sem retorno
function exibir_boas_vindas($nome) {
    echo "Bem Vindo ao Curso de PHP $nome";
}

// Função com retorno
function calcular_soma($num1, $num2) {
    return $num1 + $num2;
}

// Chamar as funções
primeira_funcao();

echo '<br />';

exibir_boas_vindas('Luciano');

echo '<br />';

echo "A soma é: ".calcular_soma(5, 6);

?>