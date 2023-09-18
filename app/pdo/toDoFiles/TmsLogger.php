<?php

namespace TmsLogger;

use PDO;
use PDOException;

class TmsLogger {
    protected $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=mysql;port=3306;dbname=to_do;charset=utf8mb4','root','rootpassword');
    }

    public function log(): void
    {
        if (!empty($_POST['newTask'])) {
            $string = 'Added new thing ToDo: ' . htmlspecialchars($_POST["newTask"]);
        
            try {
                $query = 'INSERT INTO logs (level, message) VALUES ("info", :message)';
                $params = [':message' => $string,];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }   if (!empty($_POST['idTask']) && !empty($_POST['updateTask'])) {
            $string = 'Updated thing ToDo: ' . htmlspecialchars($_POST["updateTask"]);
        
            try {
                $query = 'INSERT INTO logs (level, message) VALUES ("warning", :message)';
                $params = [':message' => $string,];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }  if (!empty($_GET["id"])) {
            $string = 'Deleted thing ToDo';
        
            try {
                $query = 'INSERT INTO logs (level, message) VALUES ("alert", :message)';
                $params = [':message' => $string,];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        }
    }
}