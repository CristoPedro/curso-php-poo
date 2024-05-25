<?php

// Associação
//Acontece quando um objeto " utiliza" outro, porém, sem eles dependam um do outro.


class Pedido {
   public $numero;
    public $cliente;
}

class Cliente {
   public  $nome;
   public  $endereco;
}

$cliente = new Cliente();

$cliente->nome = "Pedro Cristo";

$cliente->endereco = "Luanda/Cacuaco, Mulenvos de Baixo, 500casas";

$pedido = new Pedido();
$pedido->numero = "100";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_clinte' => $pedido->cliente->nome,
    'endereco_clinte' => $pedido->cliente->endereco
);

echo "<pre>";
var_dump($dados);