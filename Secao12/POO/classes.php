<?php 

class Pessoa {

    // Atributos
    var $nome;

    // Métodos getter e setter
    function setNome($nome_definido) {
        $this->nome = $nome_definido;
    }

    function getNome() {
        return $this->nome;
    }

    //getters e setters
}

$pessoa = new Pessoa(); //instanciado uma classe

$pessoa->setNome('Luciano');
echo $pessoa->getNome();

?>