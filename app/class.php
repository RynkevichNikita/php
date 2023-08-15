<?php
class First {
    private string|int $data;

    public function __construct(string|int $newData) {
        $this->data = $newData;
    }
    public function getData() {
        return $this->data;
    }
}

$first = new First ("some important data");
echo $first->getData();

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Factorial {
    private int $fact = 1;

    public function getFact ($num): void {
        for ($i = 1; $i <= $num; $i++) {
            $this->fact *= $i;
        }
        echo "Факториал числа $num будет $this->fact";
    }
}

$fact = new Factorial;
$fact->getFact(12);

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

<form action="/" method="post">
    <fieldset>
        <legend>Калькулятор</legend>
        <input type="text" name="firstNum" id="firstNum" value="<?php echo $_POST['firstNum'] ?? ''; ?>" required>
        <select name="action" id="action">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="secondNum" id="secondNum" value="<?php echo $_POST['secondNum'] ?? ''; ?>" required>
        <input type="submit">
    </fieldset>
</form>

<?php
class MyCalculator {
    function validation() {
        if (!isset($_POST['firstNum'])) {
            return false;
        }
        if (!isset($_POST['secondNum'])) {
            return false;
        }
        if ($_POST['secondNum'] === '0' && $_POST['action'] == '/') {
            echo "На ноль делить нельзя (у нас)";
            return false;
        }
        if (!is_numeric($_POST['firstNum'])) {
            echo "Ошибка ввода первого числа";
            return false;
        }
        if (!is_numeric($_POST['secondNum'])) {
            echo "Ошибка ввода второго числа";
            return false;
        }
        return true;
    }
    function action () {
        if(!$this->validation()) {
            return;
        }

        switch($_POST['action']) {
            case '+':
                $final = $_POST['firstNum'] + $_POST['secondNum'];
                echo "Результат вычисления: $final";
                return;
            case '-':
                $final = $_POST['firstNum'] - $_POST['secondNum'];
                echo "Результат вычисления: $final";
                return;
            case '*':
                $final = $_POST['firstNum'] * $_POST['secondNum'];
                echo "Результат вычисления: $final";
                return;
            case '/':
                $final = $_POST['firstNum'] / $_POST['secondNum'];
                echo "Результат вычисления: $final";
                return;
        }
    }   
}

$result = new MyCalculator;
$result->action();


echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class Bird {
    public function __construct($name)
    {
        $this->name = $name;
    }
    private string $name;
    private bool $canFly;
    private int $maxspeed = 20;

    public function setCanFly($canFly) {
        $this->canFly = $canFly;
    }

    public function setSpeed($speed) {
        $this->maxspeed = $speed;
    }

    public function getCanFly() {
        if ($this->canFly) {
            echo "$this->name can fly<br>";
        } else echo "$this->name can't fly<br>";
    }

    public function getSpeed() {
        echo "Speed of $this->name: $this->maxspeed kmh/h<br>";
    }
}

$sapsan = new Bird('Peregrine falcon');
$sapsan->setCanFly(true);
$sapsan->setSpeed(390);
$sapsan->getCanFly();
$sapsan->getSpeed();

$penguin = new Bird('Penguin');
$penguin->setCanFly(false);
$penguin->setSpeed(9);
$penguin->getCanFly();
$penguin->getSpeed();