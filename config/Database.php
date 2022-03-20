<?php

class Database {
  public function connect() {
    $url = getenv('JAWSDB_URL');
    $dbparts = parse_url($url);
    $hostname = $dbparts['exbodcemtop76rnz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com'];
    $username = $dbparts['kpyim9nuco43e7mw'];
    $password = $dbparts['t8865p922fmp9a7u'];
    $database = ltrim($dbparts['path'],'/');
    try {
      $this->conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connection Succeeded!";
    }catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
    return $this->conn;
  }
}

?>