<?php
require_once 'header.php';
?>
    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Типы полей форм</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "text"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="dataText" placeholder="Стандартное текстовое поле...">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail" class="col-sm-2 col-form-label">Тип "email"</label>
            <div class="col-sm-10">
                <input type="email" name="dataEmail" class="form-control" id="inputEmail">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Тип "password"</label>
            <div class="col-sm-10">
                <input type="password" name="dataPassword" class="form-control" id="inputPassword">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "radio"</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dataRadio" id="gridRadios1" value="option1"
                           checked>
                    <label class="form-check-label" for="gridRadios1">
                        Значение 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="dataRadio" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Значение 2
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "checkbox"</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="dataCheckbox" id="gridCheck1">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "checkbox"</legend>
            <div class="col-sm-10">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="dataCheckboxSwitch"
                           id="flexSwitchCheckChecked" checked>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "textarea"</legend>
            <div class="col-sm-10">
                <textarea class="form-control" name="dataTextarea" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "file"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="dataFile" id="formFile">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "file", для нескольких</legend>
            <div class="col-sm-10">
                <input class="form-control" type="file" name="dataFileMultiple" id="formFileMultiple" multiple>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "color", выбор цвета</legend>
            <div class="col-sm-10">
                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                       title="Выберите цвет">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "datalist"</legend>
            <div class="col-sm-10">
                <input class="form-control" name="dataDatalist" list="datalistOptions" id="exampleDataList"
                       placeholder="Введите город...">
                <datalist id="datalistOptions">
                    <option value="Минск">
                    <option value="Москва">
                    <option value="Париж">
                    <option value="Лондон">
                    <option value="Брест">
                </datalist>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "select"</legend>
            <div class="col-sm-10">
                <select class="form-select" name="dataSelect">
                    <option selected>Выберите вариант</option>
                    <option value="1">Один</option>
                    <option value="2">Два</option>
                    <option value="3">Три</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Пример "select",можно несколько</legend>
            <div class="col-sm-10">
                <select class="form-select" name="dataSelectMultiple" multiple>
                    <option selected>Выберите вариант</option>
                    <option value="1">Один</option>
                    <option value="2">Два</option>
                    <option value="3">Три</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "range"</legend>
            <div class="col-sm-10">
                <input type="range" name="dataRange" class="form-range" id="customRange1">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "tel"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="tel" name="dataTel">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "url"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="url" name="dataUrl">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "week"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="week" name="dataWeek">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "time"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="time" name="dataTime">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "search"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="search" name="dataSearch">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "month"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="month" name="dataMonth">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "number"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="dataNumber">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "datetime-local"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="datetime-local" name="dataDatetimeLocal">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "datetime"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="datetime" name="dataDatetime">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "date"</legend>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="dataDate">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Тип "image", как кнопка</legend>
            <div class="col-sm-1">
                <input class="form-control" type="image" name="dataImage" src="img/img_submit.gif" alt="Submit"
                       width="48" height="48">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Отправить</button>
                <button type="reset" class="btn btn-primary">Сброс</button>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <table class="table table-success table-striped">
                    <?php foreach ($_GET as $key => $value): ?>
                        <tr>
                            <td><?= $key; ?></td>
                            <td><?= $value; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>


    </form>


<?php
require_once 'footer.php';