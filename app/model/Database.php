<?php

    class Database {
        
        private $hostName = 'localhost';
        private $username = 'root';
        private $dbName = 'todos';
        private $password = '';
        public $conn;
        public function __construct()
        {
            $this->conn = $this->dbConnection();
        }
        public function dbConnection() {
            try {
                return new PDO("mysql:host=$this->hostName; dbname=$this->dbName", "$this->username", "$this->password",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            } catch (PDOException $e) {
                echo "Database not connected".$e->getMessage();
            }
        }

    }
