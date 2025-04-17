<?php
class Database {
    private $conn;

    public function __construct($host, $user, $password, $dbname) {
        $this->conn = new mysqli($host, $user, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getRowCountA() {
        $query = "SELECT COUNT(*) AS count FROM IN453A";
    return $this->executeQuery($query);
    }

    public function getRowCountC() {
        $query = "SELECT COUNT(*) AS count FROM IN453C";
        return $this->executeQuery($query);
    }

    public function getFullNames() {
        $query = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM IN453B";
        $result = $this->conn->query($query);
        $fullNames = [];
        while ($row = $result->fetch_assoc()) {
            $fullNames[] = $row['full_name'];
        }
        return $fullNames;
    }
    
    private function executeQuery($query) {
        $result = $this->conn->query($query);
        if (!$result) return "Unable to execute query: " . $this->conn->error;
        return $result->fetch_assoc()['count'];
        }
    }
    ?>