<?php

class Veiculo 
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar()
    {
        echo "Andou";
    }
    public function Parar()
    {
        echo "Parou"; 
    }
}

class Carro extends Veiculo
{
    public function paraBrisa()
    {
        echo "parabriza ligado";
    }
}

class Moto extends Veiculo
{
    public function TrocarVela()
    {
        echo "Trocaste a Vela";
    }
}

$carro = new Carro();
$carro->modelo = "Ferrari";
$carro->cor = "Amarelo";
$carro->ano = 2024;

 $carro->Andar() ; echo " - Carro <br>";
 $carro->paraBrisa() ; echo " - Carro <br>";

echo "<br>";
echo "<pre>";
var_dump($carro);
echo "<br>";
echo "<br>";
$moto = new Moto();
$moto->modelo = "Ling Keny";
$moto->cor = "Preta";
$moto->ano = 2023;
$moto->Parar(); echo " - Moto <br>"; 
$moto->TrocarVela(); echo " - Moto <br>"; 

echo "<br>";

var_dump($moto);