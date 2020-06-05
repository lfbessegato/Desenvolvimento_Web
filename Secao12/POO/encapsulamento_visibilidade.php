<?php 

class Veiculo {
    /* 
        public -> publico
        private -> so altera na própria classe
        protected -> Pode alterar em classe filha
    */

    private $placa;
    private $cor;
    protected $tipo='Caminhonete';

    public function setPlaca($parametro_placa){

        //Validação da Placa

        $this->placa = $parametro_placa;
    }

    public function getPlaca(){
        return $this->placa;
    }
}

class Carro extends Veiculo {
    public function exibirTipo() {
        echo $this->tipo;
    }
}

$veiculo = new Veiculo();
$veiculo->setPlaca('LFB1971');
//echo $veiculo->placa;
echo $veiculo->getPlaca();


echo '<br />';
/* So altera dentro da classe (private e protected)
$veiculo->cor = 'Azul';
echo $veiculo->cor; 

$veiculo->tipo = 'Caminhonete'; 
echo $veiculo->tipo; */

$carro = new Carro();
echo $carro->exibirTipo();


?>