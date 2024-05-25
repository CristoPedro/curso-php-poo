<?php

abstract class Banco {
    protected $saldo;
    protected $limeSaque;
    protected $juros;

    public function setSaldo($s){
       $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

  abstract protected function Sacar($s);


 abstract protected function Depositar($d);

}

class Bai extends Banco {
    public function Sacar($s){
       $res = $this->saldo -= $s;

       if($s > $res):
            echo "Não é possivel sacar  $s kz. <br>";
            echo "O número na conta é inferior a $s kz";
       else:
        echo "Sacou : $s kz. <br>";
            echo "Depois do Saque : $res kz. <br>";
        endif;
     
    }
    public function Depositar($d){
       $res =  $this->saldo += $d;
        echo "Depositou : $d kz.<br>";
        echo "actualizando...<br>";
        echo "Total na conta com o deposito: $res kz.<br>";
    }
}


$bai = new Bai();
$bai->setSaldo(2000);

echo "<hr>Meu saldo: " . $bai->getSaldo() ." kz<br>";
echo "<hr> " . $bai->Sacar(900) ."<br>";
echo "<hr> " . $bai->Depositar(2000) ."<br>";
