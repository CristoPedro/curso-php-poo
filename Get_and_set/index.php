<?php

class Login
{
    private $email;
    private $senha;

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
        if($this->email == "teste@gmail.com" && $this->senha == "123456"):
            echo "Logado com sucesso";
        else:
            echo "Não foi possivel logar";
        endif;
    }
}

$login = new Login();
$login->setEmail("teste@gmail.com");
$login->setSenha("123456");
$login->Logar();

echo "<br>";

echo $login->getEmail();
echo "<br>";
// echo $login->getSenha();