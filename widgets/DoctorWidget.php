<?php

namespace app\widgets;

use yii\base\Widget;

class DoctorWidget extends Widget {

    public $id;
    public $fio;
    public $image;
    public $description1;

    public function init() {
        parent::init();

        if (empty($this->image))
            $this->image = 'NoPicAvailable.jpg';
    }

    public function run() {

        return $this->render('doctor', ['id' => $this->id,
                    'fio' => $this->fio,
                    'image' => $this->image,
                    'description1' => $this->description1
        ]);
    }

}
