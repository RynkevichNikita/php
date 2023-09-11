<?php

class PDOrouteWork {
    protected $pdo;

    function __construct() {
        $this->pdo = new PDO('mysql:host=mysql;port=3306;dbname=Work;charset=utf8mb4','root','rootpassword');
    }
}

class WorkerId extends PDOrouteWork {
    public function workerId() {
        $workList = $this->pdo->query("SELECT id FROM Worker ORDER BY id");

        while ($row = $workList->fetch(PDO::FETCH_LAZY)) {
            echo "<option value=" . $row->id . ">" . $row->id . "</option>";
        }
    }
}

class Arrive extends PDOrouteWork {
    public function arrive() {

        $int = $_POST["workerIdArrive"];
    
        try {
            $query = 'UPDATE Worker SET time_arrive = DATE_FORMAT(NOW() + 30000, "%T") WHERE id = (:id)';
            $params = [':id' => $int];
            $prepare = $this->pdo->prepare($query);
            $execute = $prepare->execute($params);
    
            if ($execute > 0) {
                echo "You're finnaly arrive, good!";
            }
    
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}

class Leave extends PDOrouteWork {
    public function leave() {

        $int = $_POST["workerIdLeave"];
    
        try {
            $query = 'UPDATE Worker SET time_leave = NOW() WHERE id = (:id)';
            $params = [':id' => $int];
            $prepare = $this->pdo->prepare($query);
            $execute = $prepare->execute($params);
    
            if ($execute > 0) {
                echo "Oh, you're leaving, okay";
            }
    
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}

class WorkersTable extends PDOrouteWork {
    public function table() {
        $table = $this->pdo->query("SELECT id, name, Departments.department, time_arrive, time_leave, social_number FROM Worker, Departments WHERE Worker.department = Departments.department_id ORDER BY id");

        while ($row = $table->fetch(PDO::FETCH_LAZY)) {
            echo "<tr><td>" . $row->id . "</td><td>" . $row->name . "</td><td>" . $row->department . "</td><td>" . $row->time_arrive . "</td><td>" . $row->time_leave . "</td><td>" . $row->social_number . "</td></tr>";
        }
    }
}

?>