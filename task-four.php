<?php
require_once 'header.php';
?>

    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Замена Email</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Введите сообщение</legend>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="userMsg" value="Пример сообщения с почтой mail@mail.by">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-dark">Заменить</button>
            </div>
        </div>
    </form>

<?php
if ($_GET['userMsg']) {
    echo preg_replace([
        '/[^@\s]*@[^@\s]*\.[^@\s]*/',
        '/[a-zA-Z]*[:\/\/]*[A-Za-z0-9\-_]+\.+[A-Za-z0-9\.\/%&=\?\-_]+/i',
        '/\s\s+/',
    ], ['[email]', '[ссылка]', ' '], $_GET['userMsg']);
}


require_once 'footer.php';