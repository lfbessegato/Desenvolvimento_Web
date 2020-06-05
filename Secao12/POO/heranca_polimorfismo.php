<?php 

//Classe mãe ou superclasse
class Felino {

    var $mamifero = 'sim';

    function correr() {
        echo 'Correr como felino';
    }
}

//Classe filha ou subclasse
class Chita extends Felino{
    //Polimorfismo sobrescrever o 
    function correr() {
        echo 'Correr como chita a 100 km/h';
    }
}

$chita = new Chita();

echo $chita->mamifero;
echo '<br />';
$chita->correr();


?>