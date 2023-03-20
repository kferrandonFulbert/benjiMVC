<?php 
/**
 * classe mere du modèle
 */
class Db{
    protected $_db;
    protected $_table;
    /**
     * initialisation de la DB
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=TODO;host=172.16.10.190';
        $user = 'TODO';
        $password = 'todo';
        $this->_db = new PDO($dsn, $user, $password);
    }
    /**
     * Récupère les infos de la table
     * @return statement
     *
     */
    public function list()
    {
        $sql = "select * from ".$this->_table;
        return $this->_db->query($sql);
    }

}