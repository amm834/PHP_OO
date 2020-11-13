<?php
namespace app\Database;
use app\Database\DBConn;
class DAL
{
  private $db;
  private $stmt;
  public function __construct() {
    $this->db = DBconn::getInstance()->getConn();
  }
  public function all(){
    $this->stmt = $this->db->prepare("select * from articles");
    $this->stmt->execute();
    $result = $this->stmt->fetchAll(\PDO::FETCH_OBJ);
    foreach ($result as $row){
      echo $row->title.'<br>';
    }
  }
  
  public function first($id){
    $this->stmt = $this->db->prepare("select * from articles where id=:id");
    $this->stmt->bindParam(":id",$id);
    $this->stmt->execute();
    $result = $this->stmt->fetch(\PDO::FETCH_OBJ);
   echo $result->id;
  }
}