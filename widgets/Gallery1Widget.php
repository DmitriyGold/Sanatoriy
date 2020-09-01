<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of gallery1Widget
 *
 * @author Дмитрий
 */
class Gallery1Widget extends Widget {

    public $varH; // высота картинки 
    public $col; // настройка столбца (от 1 до 12)
    public $image; // путь к картинке 

    public function init() {
        parent::init();

        if (!isset($this->varH))
            $this->varH = 215;
    }

    public function run() {

        return $this->render('gallery1', [
                    'varH' => $this->varH,
                    'col' => $this->col,
                    'image' => $this->image
        ]);
    }

}
