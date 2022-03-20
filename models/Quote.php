<?php
class Quote {    
    
    private $conn;
    private $table = 'kgk3wzi0cz11l61j.quotes';

    // Post Properties
    public $id;
    public $category_id;
    public $author;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
        public function read() {
            // Create query
            $query = 'SELECT id, name, created_at FROM' . $this->table;
      
            // Prepare statement
            $stmt = $this->conn->prepare($query);
      
            // Execute query
            $stmt->execute();
      
            return $stmt;
          }
}
