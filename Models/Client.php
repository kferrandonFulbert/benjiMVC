<?php 

class dbClient{
    private $_table;
private $_db; 
    public function __construct()
    {
        $dsn = 'mysql:dbname=TODO;host=172.16.10.190';
        $user = 'TODO';
        $password = 'todo';
        $this->_db = new PDO($dsn, $user, $password);        
    }
    /**
     * @return statement
     */
    public function list(){
        $sql = "select * from client";
        return $this->_db->query($sql);
    }

}