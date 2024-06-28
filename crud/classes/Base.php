<?php
abstract class Base{
    private $id;
    private $title;
    private $description;
    private $content;

    //metodos getters
    public function getId(){
        return $this->id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getContent(){
        return $this->content;
    }

    //metodos setters
    public function setId($id){
        $this->id = $id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setDescription($d){
        $this->description = $d;
    }
    public function setContent($c){
        $this->content = $c;
    }
    
    public abstract function inserir($title, $description, $content);
    public abstract function atualizar($id, $title, $description, $content);
    public abstract function eliminar($id);
    public abstract function pesquisar($id);
    public abstract function listar();
}