<?php

class Database {
  public function connect() {
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'],'/');
    try {
      $this->conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connection Succeeded!"
    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
  }
}

?>