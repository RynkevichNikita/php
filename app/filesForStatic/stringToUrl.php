<?php

class StringToUrl {
    public static function stringToUrl($string)
    {
        return urlencode($string);
    }
}

echo StringToUrl::stringToUrl('Do you really think we can make it?');