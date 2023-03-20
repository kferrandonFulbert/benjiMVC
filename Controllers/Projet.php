<?php 
require_once "./Models/Projet.php";
class Projet{
    private $_projetModel;

    public function __construct(){
        $this->_projetModel = new dbProjet();
    }
    public function list(){
        return ['projets'=>$this->_projetModel->list()];
    }

}