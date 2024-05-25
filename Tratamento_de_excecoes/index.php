<?php
//Ocorrência anormal que afecta o funcionamento da aplicação
//Exception é a Classe base para todas Exceptions
// message, code, file, line

class Newsletter { 
    public function cadastrarEmail($email) {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           throw new Exception("Erro: digite um email valido para poder ser cadastrado no sistema", 1);
        }else {
            echo "Email cadastrado com sucesso no sistema";
        }
    }
}

$newsletter = new Newsletter();

try { 
    $newsletter->cadastrarEmail("pedro@");
}catch(Exception $e){
    echo "Mensagem: ". $e->getMessage() ."<br>";
    echo "Codigo: ". $e->getCode() . "<br>";
    echo "Linha: ". $e->getLine() . "<br>";
    echo "Arquivo: ". $e->getFile() . "<br>";
}
