<?php

require "classes/produto.php";
require "models/produto.php";

use models\Produto as productModels;
use classes\Produto as productClasses;

$produto1 = new productModels();

$produto2 = new productClasses();

$produto1->mostrarDetalhes();
echo "<br>";
$produto2->mostrarDetalhes();

