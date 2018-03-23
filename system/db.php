<?php 


/**
 * ========================================
 * Developed By @LamhotSimamora
 * ========================================
 */

class driverPDO
{

  private $server_name,$db_name,$user_name,$password;
  private $conn;
  private $obj;

  function __construct()
  { 
      $this->server_name    = 'localhost';
      $this->user_name      = 'root';
      $this->db_name        = 'db_wilayah';          
      $this->password       = '';

      $this->conn = new \PDO(
                "mysql:host=".$this->server_name
                  .";dbname=".$this->db_name
                            , $this->user_name
                            , $this->password
      );
  }

  protected function setQuery($query)
  {
      $this->obj = $this->conn->prepare($query);
  }

  protected function execute(){
      return $this->obj->execute() ? TRUE : FALSE;
  }

  protected function getAllData(){
      $this->execute();
      return $this->obj->fetchAll(\PDO::FETCH_ASSOC);
  }

  protected function getData(){
      $this->execute();
      return $this->obj->fetch(\PDO::FETCH_ASSOC);
  }

  protected function getCount(){
      return $this->obj->rowCount();
  }

  protected function getLastId(){
      return $this->conn->lastInsertId();
  }


}
