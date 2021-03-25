<?php
require_once 'header.php';
?>

    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Проверка почты</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Ваша почта:</legend>
            <div class="col-sm-5">
                <input class="form-control" type="text" name="userMail" placeholder="mail@mail.by">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Проверить</button>
            </div>
        </div>
    </form>

<?php

if ($_GET['userMail']) {
    $output = preg_match('~^(?=.{8,}@)(?:[a-z0-9]*_?[a-z0-9]+|[a-z0-9]+_?[a-z0-9]*)@[a-z]{2,}\\.(?:ru|com|net|by)$~i',
        $_GET['userMail']) ? "Вы ввели корректный email адрес" : "Вы ввели некорректный email адрес";
    echo $output;
}


require_once 'footer.php';