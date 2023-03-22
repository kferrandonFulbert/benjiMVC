<?php 
require_once "Db.php";
class dbClient extends Db{
  
    public function __construct()
    {
        parent::__construct();
        $this->_table= "client";        
    }
    public function update($id, $nom, $siret, $status, $adresse){
        $sql = "update " . $this->_table . " set nom=:nom, 
        siret=:siret , statut_juridique=:status , adresse=:adresse where id=:id";
        $sth = $this->_db->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->bindParam(':nom', $nom, PDO::PARAM_STR, 40);
        $sth->bindParam(':siret', $siret, PDO::PARAM_STR, 13);
        $sth->bindParam(':status', $status, PDO::PARAM_STR, 40);
        $sth->bindParam(':adresse', $adresse, PDO::PARAM_STR, 250);
        $sth->execute();
        $sth->debugDumpParams();
       // die;
    }
    public function insert($nom, $siret, $status, $adresse){
        $sql = "insert into " . $this->_table . " 
        (nom, siret, statut_juridique, adresse) value(:nom, :siret, :status, :adresse);
        ";
        $sth = $this->_db->prepare($sql);
      //  $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->bindParam(':nom', $nom, PDO::PARAM_STR, 40);
        $sth->bindParam(':siret', $siret, PDO::PARAM_STR, 13);
        $sth->bindParam(':status', $status, PDO::PARAM_STR, 40);
        $sth->bindParam(':adresse', $adresse, PDO::PARAM_STR, 250);
        $sth->execute();
        $sth->debugDumpParams();
      //  die;
    }
    


}