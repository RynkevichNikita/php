<form action="/" method="post">
    <fieldset>
        <legend>Введите ваши данные</legend>
        <input type="text" name="name" id="name">
        <label for="name">Имя</label><p></p>
        <input type="text" name="surname" id="surname">
        <label for="surname">Фамилия</label><p></p>
        <input type="number" name="age" id="age">
        <label for="age">Возраст</label><p></p>
        <input type="number" name="luckyNumber" id="luckyNumber">
        <label for="luckyNumber">Выбери число от 0 до 9!</label><p></p>
        <input type="text" name="string" id="string">
        <label for="string">Введи слово на русском</label><p></p>
        <input type="file" name="image" id="image">
        <label for="image">Выбери изображение</label><p></p>
        <input type="submit">
    </fieldset>
</form>

<?php
$content = implode(', ', $_POST);
$stream = fopen("filesForFiles/user.txt", "w");
fwrite($stream, $content);
fclose($stream);
$streamRead = fopen("filesForFiles/user.txt", "r");
echo fread($streamRead, 4096);
fclose($streamRead);
echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$streamNum = fopen("filesForFiles/numbers.txt", "w+");
for ($i = 1; $i < 100; $i++) {
    $randomInt = rand(0, 9);
    fwrite($streamNum, $randomInt);
}
fclose($streamNum);
$streamReadNum = fopen("filesForFiles/numbers.txt", "r");
$numbers = str_split(fgets($streamReadNum));
fclose($streamReadNum);
$count = 0;
foreach ($numbers as $number) {
    $count;
    if (isset($_POST['luckyNumber']) && $_POST['luckyNumber'] == $number) {
        $count++;
    }
}
echo "Ваше число встретилось $count раз";
echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$dir = scandir(getcwd());
print_r($dir);
echo "<br>";
echo "В вашем каталоге " . count($dir) - 2 . " папок и файлов";
echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['string'])) {
    $letters = preg_split('//u', $_POST['string'], -1, PREG_SPLIT_NO_EMPTY);
    foreach ($letters as &$letter) {
        if ($letter == "а") {
            $letter = "a";
            continue;
        }
        if ($letter == "б") {
            $letter = "b";
            continue;
        }
        if ($letter == "в") {
            $letter = "v";
            continue;
        }
        if ($letter == "г") {
            $letter = "g";
            continue;
        }
        if ($letter == "д") {
            $letter = "d";
            continue;
        }
        if ($letter == "е" || $letter == "ё") {
            $letter = "e";
            continue;
        }
        if ($letter == "ж") {
            $letter = "j";
            continue;
        }
        if ($letter == "з") {
            $letter = "z";
            continue;
        }
        if ($letter == "и" || $letter == "й") {
            $letter = "i";
            continue;
        }
        if ($letter == "к") {
            $letter = "k";
            continue;
        }
        if ($letter == "л") {
            $letter = "l";
            continue;
        }
        if ($letter == "м") {
            $letter = "m";
            continue;
        }
        if ($letter == "н") {
            $letter = "n";
            continue;
        }
        if ($letter == "о") {
            $letter = "o";
            continue;
        }
        if ($letter == "п") {
            $letter = "p";
            continue;
        }
        if ($letter == "р") {
            $letter = "r";
            continue;
        }
        if ($letter == "с") {
            $letter = "s";
            continue;
        }
        if ($letter == "т") {
            $letter = "t";
            continue;
        }
        if ($letter == "у") {
            $letter = "y";
            continue;
        }
        if ($letter == "ф") {
            $letter = "f";
            continue;
        }
        if ($letter == "х") {
            $letter = "h";
            continue;
        }
        if ($letter == "ц") {
            $letter = "c";
            continue;
        }
        if ($letter == "ч") {
            $letter = "ch";
            continue;
        }
        if ($letter == "ш") {
            $letter = "sh";
            continue;
        }
        if ($letter == "щ") {
            $letter = "sh'";
            continue;
        }
        if ($letter == "ь" || $letter == "ъ") {
            $letter = "'";
            continue;
        }
        if ($letter == "ы") {
            $letter = "y";
            continue;
        }
        if ($letter == "э") {
            $letter = "e";
            continue;
        }
        if ($letter == "ю") {
            $letter = "u";
            continue;
        }
        if ($letter == "я") {
            $letter = "ya";
            continue;
        }
    }
    $string = implode('', $letters);
    echo $string;
    echo "<br>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// $image = "filesForFiles/1.jpeg";
// function image ($image) {
//     if (preg_match('/.jpeg$|.png$|.ico$|.gif$|.tiff$|.webp$|.eps$|.svg$|.psd$|.indd$|.cdr$|.raw$/', $image)) {
        // echo "<img src=$image>";
//     }
// };
// image($img);


$exts = ['png', 'jpeg', 'ico', 'gif', 'tiff', 'webp', 'eps', 'svg', 'psd', 'indd', 'cdr', 'raw'];

// $img = !isset($_POST['image'])?? pathinfo($_POST['image']);
// foreach ($exts as $ext) {
//     if (isset($_POST['image']) && $img['extension'] == $ext) {
//         echo "Картинка валидная (скорее всего)";
//         break;
//     }
// }

$img2 = (!isset($_POST['image'])) ?: pathinfo($_POST['image'], PATHINFO_EXTENSION);
if (isset($_POST['image']) && in_array($img2, $exts)) {
    echo "Картинка валидная (скорее всего)";
} else if (isset($_POST['image']) && !in_array($img2, $exts)) {
    echo "Что-то пошло не так";
}