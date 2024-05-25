<?php

class Veiculo 
{
    private $modelo;
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
    public function setModelo($mod)
    {
        $this->modelo = $mod;
    }
    public function getModelo(){
        return $this->modelo;
    }
}

class Carro extends Veiculo
{
    public function paraBrisa()
    {
        echo "parabriza ligado";
    }
    // public function setModelo($mod)
    // {
    //     $this->modelo = $mod;
    // }
    // public function getModelo(){
    //     return $this->modelo;
    // }
}

class Moto extends Veiculo
{
    public function TrocarVela()
    {
        echo "Trocaste a Vela";
    }
}

$carro = new Veiculo();
$carro->setModelo("Porch");
// $veiculo->modelo = "Mercedes";

// echo $carro->getModelo();

echo "<pre>";
var_dump($carro);