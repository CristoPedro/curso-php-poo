<?php

class Pessoa {
    const nome = "Meu nome é Pedro Cristo";
    public function exibirNome() {
        echo self::nome;
    }
}

class Pedro extends Pessoa {
    const nome = "Armando Cristo";
    public function exibirNome(){
        echo parent::nome;
    }
}

$pedro = new Pedro();

$pedro->exibirNome();