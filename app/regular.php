<?php

$regSentence = "Я люблю PHP";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo preg_replace('/ /', '', $regSentence);

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function phpSwap($replace) {
    global $regSentence;
    echo preg_replace('/PHP/', $replace, $regSentence);
}

phpSwap('coffee');

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo preg_match('/ю.[а-я]/u', $regSentence);

echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function noSecondWord() {
    $regLocal = ' Я люблю PHP еще немного русских букв';
    $regLocalChanged = trim($regLocal);
    echo preg_replace('/ ([А-я]+)/u', '', $regLocalChanged, 1);
}

noSecondWord();

/////////////

function noSecondWord2($string) {
    $regLocalChanged = trim($string);
    echo preg_replace('/ ([А-яA-z]+)/u', '', $regLocalChanged, 1);
}

echo "<br>";

noSecondWord2('Бояться не надо,');
noSecondWord2('проблемы не вернутся');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////