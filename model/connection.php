<?php

class Connection{

  protected $db_name = 'mvcportfolio';
  protected $db_host = 'localhost';
  protected $db_user = 'root';
  protected $db_password = '';

  public function __construct(){
    try {
        $connection = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.'', $this->db_user, $this->db_password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $connection->query("SELECT * FROM projects")->fetch();
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
  }
}
