<?php
class Cache {
    public static $arrCache = [];
    public static function getCache()
    {
        if (isset($_GET['fname']) && isset($_GET['sname'])) {
            return 'Surname: ' . $_GET['sname'] . '<br> Name: ' . $_GET['fname'];
        }
    }
    public static function write() 
    {
        if (isset($_GET['fname']) && isset($_GET['sname'])) {
            array_push(self::$arrCache, $_GET['fname'] . '_' . $_GET['sname'] . '/');
            file_put_contents('filesForStatic/users.txt', self::$arrCache);
        }
    }
}

Cache::write();
Cache::write(); // В users.txt две записи
echo Cache::getCache();

?>

<form action="/" method="get">
    <fieldset>
        <legend>Your name</legend>
        <input type="text" name="fname" id="fname">
        <legend>Your surname</legend>
        <input type="text" name="sname" id="sname">
    </fieldset>
    <input type="submit" value="Submit">
</form>