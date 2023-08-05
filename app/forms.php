<div>Заполните анкету</div>
<form action="/" method="post">
    <fieldset>
        <legend>Введите ваш телефон</legend>
        <input type="tel" name="telephon" id="telephon" placeholder="+375(29)123-45-68" required>
    </fieldset>
    <fieldset>
        <legend>Введите ваш адрес</legend>
        <input type="text" name="town" id="town" placeholder="Город" required>
        <input type="text" name="street" id="street" placeholder="Улица" required>
        <input type="text" name="house" id="house" placeholder="Дом/корпус" required>
        <input type="number" name="flat" id="flat" placeholder="Квартира">
    </fieldset>
    <fieldset>
        <legend>Введите ваш email</legend>
        <input type="email" name="email" id="email" placeholder="example@email.com" required>
    </fieldset>
    <fieldset>
        <legend>Выберите ваш пол</legend>
        <div>
            <input type="radio" name="male" id="male">
            <label for="male">Мужчина</label>
        </div>
        <div>
            <input type="radio" name="female" id="female">
            <label for="female">Женщина</label>
        </div>
        <div>
            <input type="radio" name="apache" id="apache">
            <label for="apache">Apache</label>
        </div>
    </fieldset>
    <input type="submit">
</form>

<?php
if ($_POST['telephon'] == null) {
    return;
} elseif (preg_match('/[А-яA-z]/u', $_POST['telephon'])) {
    echo "Номер телефона не должен содержать букв";
    echo "<br>";
}

if ($_POST['town'] == null) {
    return;
} elseif (preg_match('/[0-9]/', $_POST['town'])) {
    echo "В городе не должно быть цифр";
    echo "<br>";
}

if ($_POST['street'] == null) {
    return;
} elseif (preg_match('/[0-9]/', $_POST['street'])) {
    echo "Улица не должна содержать цифр";
    echo "<br>";
}