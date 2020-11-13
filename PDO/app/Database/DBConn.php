<?php

namespace app\Database;

class DBConn
{
  private $conn;
  private static $instance;
  const DB_HOST = "localhost";
  const DB_NAME = "mtk_course";
  const DB_USER = "root";
  const DB_PASS = "";
  private function __construct() {
    try {
      $this->conn = new \PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME, self::DB_USER, self::DB_PASS);
      $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e) {
      echo $e->getMessage();
    }
  }
  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new DBConn();
    }
    return self::$instance;
  }
  public function getConn() {
    return $this->conn;
  }
}