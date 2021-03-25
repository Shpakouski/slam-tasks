<?php
require_once 'header.php';
?>

    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Транслит</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Введите сообщение</legend>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="userMsg">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-secondary">Транслитерировать</button>
            </div>
        </div>
    </form>

<?php

if ($_GET['userMsg']) {
    echo translit($_GET['userMsg']);
}

function translit($str)
{
    $tr = [
        "А"  => "A",
        "Б"  => "B",
        "В"  => "V",
        "Г"  => "G",
        "Д"  => "D",
        "Е"  => "E",
        "Ж"  => "J",
        "З"  => "Z",
        "И"  => "I",
        "Й"  => "Y",
        "К"  => "K",
        "Л"  => "L",
        "М"  => "M",
        "Н"  => "N",
        "О"  => "O",
        "П"  => "P",
        "Р"  => "R",
        "С"  => "S",
        "Т"  => "T",
        "У"  => "U",
        "Ф"  => "F",
        "Х"  => "H",
        "Ц"  => "TS",
        "Ч"  => "CH",
        "Ш"  => "SH",
        "Щ"  => "SCH",
        "Ъ"  => "",
        "Ы"  => "YI",
        "Ь"  => "",
        "Э"  => "E",
        "Ю"  => "YU",
        "Я"  => "YA",
        "а"  => "a",
        "б"  => "b",
        "в"  => "v",
        "г"  => "g",
        "д"  => "d",
        "е"  => "e",
        "ж"  => "j",
        "з"  => "z",
        "и"  => "i",
        "й"  => "y",
        "к"  => "k",
        "л"  => "l",
        "м"  => "m",
        "н"  => "n",
        "о"  => "o",
        "п"  => "p",
        "р"  => "r",
        "с"  => "s",
        "т"  => "t",
        "у"  => "u",
        "ф"  => "f",
        "х"  => "h",
        "ц"  => "ts",
        "ч"  => "ch",
        "ш"  => "sh",
        "щ"  => "sch",
        "ъ"  => "y",
        "ы"  => "yi",
        "ь"  => "'",
        "э"  => "e",
        "ю"  => "yu",
        "я"  => "ya",
        "/"  => "-",
        "\\" => "-",
        "*"  => "-",
        "*"  => "-",
        "\"" => "",
        "<"  => "-",
        ">"  => "-",
        "|"  => "-",
        "%"  => "-",
        ","  => "",
        "?"  => "-",
        ":"  => "-",
        "\"" => "-",
    ];

    return strtr($str, $tr);
}

require_once 'footer.php';