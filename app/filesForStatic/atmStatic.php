<?php

class Atm {
    private static $cash = 0;

    public static function deposit($amount) 
    {
        self::$cash += $amount;
    }
    public static function withdraw($amount) 
    {
        if (self::$cash > $amount) {
            self::$cash -= $amount;
        } else echo "No";
    }

    public static function check() 
    {
        return self::$cash;
    }
}

echo Atm::check();
echo "<br>";
Atm::withdraw(15);
echo "<br>";
echo Atm::check();
echo "<br>";
Atm::deposit(50);
echo Atm::check();
echo "<br>";
Atm::withdraw(15);
echo Atm::check();
echo "<br>";