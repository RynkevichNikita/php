<?php
$string = !empty($_COOKIE['name']) ? $_COOKIE['name'] : 'lul';
setcookie('name', $string, time() + 3600, '/');


class Cookie {
    public static function setCookieName($string)
    {
        setcookie('name', $string, time() + 3600, '/');
    }
    public static function getCookie()
    {
        return $_COOKIE['name'] ?? '';
    }
}

Cookie::setCookieName('kek');
echo Cookie::getCookie();