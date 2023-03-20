<?php
require_once "Db.php";
class dbProjet extends Db
{
  
    public function __construct()
    {
       parent::__construct();
        $this->_table="projet";
    }
    
}
