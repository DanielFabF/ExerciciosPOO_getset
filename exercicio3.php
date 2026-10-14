<?php

class Carro{
    private string $modelo;
    private int $consumo;
    private float $tanque;


    public function __construct($modelo, $consumo = 10, $tanque = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }

    public function abastecer($quantidade){
        if($quantidade > 0){
            $this->tanque += $quantidade;
            echo "<br>" . $quantidade . " litros abastecidos";
        }else{
            echo "<br> valor indisponivel";
        }
    }

    public function dirigir($km){
        $combustivelnescessario = $km / $this->consumo;
        if($combustivelnescessario > $this->tanque){
            echo "<br>Combustivel insuficiente";
        }else{
            echo "<br>Combustivel gasto: " . $combustivelnescessario;
            $this->tanque -= $combustivelnescessario;
        }
    }

    public function exibirInfo(){
        echo "<br> <h1> Modelo: " . $this->modelo . " | Consumo: " . $this->consumo . "Km/L | Tanque: " . $this->tanque . " Litros";
    }

}

$carro1 = new Carro('Astra');
$carro1->abastecer(50);
$carro1->dirigir(5);
$carro1->exibirInfo();


?>