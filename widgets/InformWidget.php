<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

use yii\base\Widget;

/**
 * Description of InfoWidget
 *
 * @author Дмитрий
 */
class InformWidget extends Widget {

    //put your code here

    public $id;
    public $name;
    public $description;
    public $image1; // путь к картинке 1
    public $image2; // путь к картинке 2

    public function init() {
        parent::init();

        if ($this->image1 == null)
            $this->image1 = '';

        if ($this->image2 == null)
            $this->image2 = '';

        if ($this->description == null)
            $this->description = '';
    }

    public function run() {

        return $this->render('inform', ['id' => $this->id,
                    'name' => $this->name,
                    'description' => $this->description,
                    'image1' => $this->image1,
                    'image2' => $this->image2
        ]);
    }

}
