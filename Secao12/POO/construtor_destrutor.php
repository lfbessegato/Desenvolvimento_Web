<?php 

class Pessoa {

    private $nome;

    public function correr() {
        echo $this->nome . " correndo<br>";
    }

    //Configurar informações iniciais na classe
    function __construct($parametro_nome) {
        echo "Construtor Iniciado <br>";
        $this->nome = $parametro_nome;
    }

    //Médodo é chamado quado o objeto é removido da memória
    function __destruct() {
        echo "Objeto removido <br>";
    }
}

$pessoa = new Pessoa('Luciano');
$pessoa->correr();
?>