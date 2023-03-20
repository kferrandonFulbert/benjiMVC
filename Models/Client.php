<?php 
require_once "Db.php";
class dbClient extends Db{
  
    public function __construct()
    {
        parent::__construct();
        $this->_table= "client";        
    }


}