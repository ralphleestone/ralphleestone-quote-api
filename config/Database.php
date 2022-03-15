<?php 
  class Database {
    // DB Params
    private $host = 'exbodcemtop76rnz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    private $db_name = 'kgk3wzi0cz11l61j';
    private $username = 'kpyim9nuco43e7mw';
    private $password = 'fejedja0chs0qgd0';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }