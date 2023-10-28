<?php
// cria sempre uma classe e dentro dela criamos os dados

class produtos{
    private $id, $name, $descricao; //podemos resumir aqui os dados com o atributo
    
    public function getId(){
        return $this->id;

    }
    public function setId($id){
        $this->id = $id;

    }
    public function getName(){
        return $this->name;

    }
    public function setName($name){
        $this->name = $name;

    }
    public function getDescricao(){
        return $this->descricao;

    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;

    }

}
