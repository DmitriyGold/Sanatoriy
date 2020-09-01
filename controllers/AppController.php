<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller {

    public function debug($arr) { // глобальная функции для доступа в контроллере
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }

}

// глобальная функции для доступа в виде
function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function dateCheker() {

    $day = date("w", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
    echo $day; // День недели возвращается в виде числа (0=Воскресенье, 1=Понедельник и т.д.)

   if ($day % 2 === 0)
        return '@web/images/carousel/';
    else
        return '@web/images/carousel/1/';
}

