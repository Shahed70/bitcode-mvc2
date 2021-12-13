<?php
    require_once "Database.php";

    class Todo {
        public $DB;
        public function __construct()
        {
             $this->DB = new Database();
        } 

        public function getAllTodo () {
            try {
                
                $pdo = $this->DB->conn;
                $sql = "SELECT * FROM  todolist";
                $statement = $pdo->prepare($sql);
                $statement->execute();
                return $statement->fetchAll(PDO::FETCH_OBJ);

            } catch (PDOException $e) {
                    echo "Could not find any data".$e->getMessage();

            }
        }

        public function insertTodo ($title, $description, $status) {
            $pdo = $this->DB->conn;
            $sql = "INSERT INTO todolist (title, description, completed) VALUES (?,?,?,?)";
            $statement = $pdo->prepare($sql);
            $statement->execute([$title, $description, $status]);

        }


    }

