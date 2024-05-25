<?php

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticia implements Crud {
    public function create()
    {
        //Lógica para criar uma noticia
    }
    public function read()
    {
        //Lógica para ler uma notícia
    }
    public function update()
    {
        //Lógica para atualizar uma notícia
    }
    public function delete()
    {
        //Lógica para deletar uma notícia
    }
}