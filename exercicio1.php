<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;

    }

    public function aumentarSalario($percentual){
        if($percentual > 10 | $percentual < 0){
            echo "<br> O valor deve estar entre 0 e 10";
        }else{
            $this->salario += $this->salario * ($percentual / 100);
        }
    }

    public function exibirSalario(){
        echo "<br> <h1> Funcionário: " . $this->nome . " - Salário: R$" . $this->salario;
    }
}

$funcionario1 = new Funcionario('Daniel');
$funcionario1->aumentarSalario(10);
$funcionario1->exibirSalario();


?>