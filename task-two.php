<?php
require_once 'header.php';
function in_array_r($needle, $haystack, $strict = false)
{
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item,
                    $strict))) {
            return true;
        }
    }

    return false;
}

?>

    <div class="row mb-5">
        <div class="col-sm-10 offset-sm-2">
            <h1>Размерность массива</h1>
        </div>
    </div>

    <form>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Строки массива</legend>
            <div class="col-sm-2">
                <input class="form-control" type="number" name="arrayRows">
            </div>
        </div>
        <div class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Столбцы массива</legend>
            <div class="col-sm-2">
                <input type="number" name="arrayCols" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-warning">Найти</button>
            </div>
        </div>
    </form>

<?php

if ($_GET['arrayRows'] && $_GET['arrayCols']) {
    $table     = "<table class=\"table table-bordered border-primary\">";
    $arr       = [];
    $min       = null;
    $className = '';
    for ($i = 0; $i < $_GET['arrayRows']; $i++) {
        $table .= '<tr>';
        for ($j = 0; $j < $_GET['arrayCols']; $j++) {
            $num = null;
            while ($num === null) {
                $randomNumber = rand(1, 1000);
                if ( ! in_array_r($randomNumber, $arr)) {
                    $num = $randomNumber;
                }
            }
            $arr[$i][$j] = $num;
            if ( ! $min) {
                $min = $num;
            }
            if ($num <= $min) {
                $min       = $num;
                $className .= "m";
                $table     .= "<td class = \"$className\"> $num </td>";
            } else {
                $table .= '<td>' . $num . '</td>';
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;
    echo "<style>.$className {
    background-color: #d2f4ea !important;
}</style>";

}

require_once 'footer.php';