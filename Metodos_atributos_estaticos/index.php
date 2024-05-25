<?php

class Login {

    public static $email;
    public static $senha;

    public static function verificarLogin() {
        
        if(self::$email == "pedrocristo@gmail.com" && self::$senha == "pedro"){

            echo "O usuário esta logado no sitema";
        }else {
            echo "Não foi possivel logar";
        }
        
    }
     public function Sair(){
       echo "<br> Deslogou com sucesso";
     }
}

Login::$email = "pedrocristo@gmail.com";
Login::$senha = "pedro";
Login::verificarLogin(); 
$deslogar = new Login();

$deslogar->Sair(); 