<?php

class PDOroute {
    protected $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=mysql;port=3306;dbname=to_do;charset=utf8mb4','root','rootpassword');
    }
}

class CreateThing extends PDOroute {
    public function insert() {

        if (!empty($_POST['newTask'])) {
            $string = htmlspecialchars($_POST["newTask"]);
        
            try {
                $query = 'INSERT INTO todos (todo) VALUES (:todo)';
                $params = [':todo' => $string];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
                if ($execute > 0) {
                    echo "We added a new thing ToDo!";
                }
        
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        
        } else {
            echo "You didn't insert anything!";
        }
    }
}

class UpdateThing extends PDOroute {
    public function update() {

        if (!empty($_POST['idTask']) && !empty($_POST['updateTask'])) {
            $id = htmlspecialchars($_POST["idTask"]);
            $string = htmlspecialchars($_POST["updateTask"]);
        
            try {
                $query = 'UPDATE todos SET todo = (:todo) WHERE id = (:id)';
                $params = [':todo' => $string, ':id' => $id];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
                if ($execute > 0) {
                    echo "We updated something ToDo!";
                }
        
            } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
            }
        
        } else {
            echo "Something missing!";
        }
    }
}

class DeleteThing extends PDOroute {
    public function delete() {
        if (!empty($_GET["id"])) {

            $id = htmlspecialchars($_GET["id"]);
        
            try {
                $query = "DELETE FROM todos WHERE id = :id";
                $params = ['id' => $id];
                $prepare = $this->pdo->prepare($query);
                $execute = $prepare->execute($params);
        
                if ($execute > 0) {
                    echo "Right, nobody got time for this!";
                }
        
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        
        } else {
            echo "Something wrong!";
        }
    }
}

class ToDoTable extends PDOroute {
    public function table() {

        $toDoList = $this->pdo->query("SELECT * FROM todos");

        while ($row = $toDoList->fetch(PDO::FETCH_LAZY)) {
            echo "<tr><td>" . $row->id . "</td><td>" . $row->todo . " <a href='pdo/toDoFiles/delete.php?id=$row->id'>[Delete]</a></td></tr>";
        }
    }
}

?>