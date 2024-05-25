<?php

class Login
{
    private $mail;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email; 
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
         $this->email = $email;
    }

    
    public function getSenha(){
        return $this->senha; 
    }

    public function setSenha($s){
         $this->senha = $s;
    }


    public function Logar()
    {
        if($this->email == "teste@gmail.com" && $this->senha == "123456" && $this->nome == "Pedro Cristo"):
            echo "Logado com sucesso";
        else:
            echo "Não foi possivel logar";
        endif;
    }
}

$login = new Login("teste@gmail.com", "123456", "Pedro Cristo");

$login->Logar();

echo "<br>";

echo $login->getNome();
echo "<br>";
// echo $login->getSenha();