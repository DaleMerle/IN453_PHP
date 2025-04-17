<?php
require_once "database.php";

class business {
    private $db;

    public function __construct($host, $user, $password, $dbname) {
        $this->db = new database($host, $user, $password, $dbname);
    }

    public function getRowCountA() {
        return $this->db->getRowCountA();
    }

    public function getRowCountC() {
        return $this->db->getRowCountC();
    }

    public function getFullNames() {
        return $this->db->getFullNames();
    }
}
?>