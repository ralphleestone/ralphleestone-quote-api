<?php
class Quote {
        // DB stuff
        private $conn;
        private $table = 'kgk3wzi0cz11l61j.quotes';
    
        // Post Properties
        public $id;
        public $qoute;
        public $category_id;
        public $author;
    
        // Constructor with DB
        public function __construct($db) {
          $this->conn = $db;
        }
    
        // Get Posts
        public function read() {
          
            // Create query
          $query = 'SELECT * FROM kgk3wzi0cz11l61j.quotes';
          
          // Prepare statement
          $stmt = $this->conn->prepare($query);
    
          // Execute query
          $stmt->execute();
    
          return $stmt;
        }
}
