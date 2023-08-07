<?php

// if (!isset($_COOKIE['last3Urls'])) {
//     setcookie('last3Urls', 'urls urls urls', time() + 3600, '/');
// } else {
//     $urlsArr = explode(' ', $_COOKIE['last3Urls']);
//     array_push($urlsArr, $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
//     if (count($urlsArr) > 3) {
//         array_shift($urlsArr);
//     }
//     $urlString = implode(' ', $urlsArr);
//     setcookie('last3Urls', $urlString, time() + 3600, '/');
// }

function urls() {
    $arrUrl = !empty($_COOKIE['last3Urls']) ? json_decode($_COOKIE['last3Urls']) : [];
    array_push($arrUrl, $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
    if (count($arrUrl) > 3) {
        array_shift($arrUrl);
    }
    $newArr = json_encode($arrUrl);
    setcookie('last3Urls', $newArr, time() + 3600, '/');
}

function visitCounts() {
    $count = !empty($_COOKIE['count']) ? $_COOKIE['count'] : 1;
    ++$count;
    setcookie('count', $count, time() + 3600, '/');
}

urls();
visitCounts();