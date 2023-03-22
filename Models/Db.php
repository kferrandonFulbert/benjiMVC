<?php

/**
 * classe mere du modèle
 */
class Db
{
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
        $sql = "select * from " . $this->_table;
        return $this->_db->query($sql);
    }

    public function getOneById(int $id)
    {
        $sql = "select * from " . $this->_table . " where id=:id";
        $sth = $this->_db->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute([':id' => $id]);
        return $sth->fetch(PDO::FETCH_OBJ);
        //   $sth->debugDumpParams();
    }
    public function deleteOneById(int $id){
        $sql = "delete from " . $this->_table . " where id=:id";
        $sth = $this->_db->prepare($sql);
        $sth->execute([':id' => $id]);
    }
}
