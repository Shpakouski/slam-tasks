<?php
require_once 'header.php';
?>

    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Сокращенный вариант ФИО</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Ваше ФИО:</legend>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="userName">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-danger">Получить</button>
            </div>
        </div>
    </form>

<?php

if ($_GET['userName']) {
    echo shortName($_GET['userName']);

}

function shortName($name)
{
    $namesArr        = explode(' ', $name);
    $countOfNamesArr = count($namesArr);
    if ($countOfNamesArr > 1) {
        for ($i = 1; $i < $countOfNamesArr; $i++) {
            $namesArr[$i] = mb_substr($namesArr[$i], 0, 1) . ".";
        }

        return implode(' ', $namesArr);
    }

    return $name;
}

require_once 'footer.php';