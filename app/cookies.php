<?php
include_once "./cookiePages/variables.php";

$username = !empty($_COOKIE['username']) ? $_COOKIE['username'] : $_POST['name'];
setcookie('username', $username, time() + 3600, '/');

$password = !empty($_COOKIE['password']) ? $_COOKIE['password'] : md5($_POST['pass']);
setcookie('password', $password, time() + 3600, '/');

var_dump(json_decode($_COOKIE['last3Urls']));
var_dump($_COOKIE['count']);
?>

<form action="/" method="post">
    <fieldset>
        <legend>Введите имя пользователя</legend>
        <input type="text" name="name" id="name">
        <legend>Введите пароль</legend>
        <input type="password" name="pass" id="pass">
    </fieldset>
    <input type="submit">
</form>

Feel free to visit our other pages
<a href="cookiePages/page1.php"> 1 </a>
<a href="cookiePages/page2.php"> 2 </a>
<a href="cookiePages/page3.php"> 3 </a>
<p></p>