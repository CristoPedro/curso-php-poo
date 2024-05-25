<?php

 class Animal {
    public function Andar(){
        echo "O animal andou";
    }
 }

 class Cavalo extends Animal {
    public function Andar(){
        echo "O Cavalo Andou";
    }
 }

 
 class Pessoa extends Animal {
    public function Andar(){
        echo "O Pedro Andou";
    }
 }

 
 class Baleia extends Animal {
    public function Andar(){
        echo "A Baleia Nadou";
    }
 }
 $animal = new Baleia();
 $animal->Andar();
