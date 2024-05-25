<?php

class Pessoa 
{
    public $nome;
    public $idade;

    public function Falar()
    {
        echo $this->nome." de ". $this->idade. " anos acabou de falar <br>";
    }

}

$pedro = new Pessoa();

$pedro->nome = "Pedro Cristo";
$pedro->idade = 17;

$pedro->Falar();
