<?php

class Pessoa {
    public $idade;

    public function __clone()
    {
        echo "Clonagem de Objetos ";
    }
}

$pedro = new Pessoa();

$pedro->idade = 10;

// echo $pedro->idade;

$armando = clone $pedro;

$armando->idade = 18;

echo $pedro->idade;