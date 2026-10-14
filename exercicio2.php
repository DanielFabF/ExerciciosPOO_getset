<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;

    }

    public function vender($quantidade){
        if($this->estoque >= $quantidade){
            echo "<br>Venda de " . $quantidade . " unidades de " . $this->nome . " realizada";
            $this->estoque -= $quantidade;
        }else{
            echo "<br>Estoque insuficiente";
        }
    }

    public function reajustarPreco($percentual){
        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo(){
        echo "<br> <h1> " . $this->nome . "-> R$ " . $this->preco . "| Estoque: " . $this->estoque . " Unidades";
    }

}

$produto1 = new Produto('Pc', 100, 10);
$produto1->exibirInfo();
$produto1->vender(7);
$produto1->reajustarPreco(5);
$produto1->exibirInfo();
?>