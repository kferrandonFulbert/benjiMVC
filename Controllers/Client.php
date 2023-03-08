<?php 
require_once "./Models/Client.php";
class Client{
    private $_clientModel;

    public function __construct(){
        $this->_clientModel = new dbClient();
    }
    public function list(){
      //  var_dump($this->_clientModel->list());
        return ['clients'=>$this->_clientModel->list()];
    }

}