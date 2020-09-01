<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of mainCardWidget
 *
 * @author Дмитрий
 */
class CardWidget extends Widget {

    public $sitePage; // страница сайта
    public $title; //  заголовок 
    public $description; //  описание 
    public $imagePath; // путь к картинке 

    public function init() {
        parent::init();

        if (!isset($this->title))
            $this->title = 'заголовок';
    }

    public function run() {

        return $this->render('card', [
                    'sitePage' => $this->sitePage,
                    'title' => $this->title,
                    'description' => $this->description,
                    'imagePath' => $this->imagePath
                ]);
    }

}
