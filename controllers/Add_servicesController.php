<?php

namespace app\controllers;

use app\models\db\Scrub;
use app\models\db\Sauna;
use app\models\db\Khammam;
use app\models\db\Dzhakuzi;

class Add_servicesController extends AppController {

    public function actionTemp() {

        return $this->render('temp');
    }

    public function actionScrub() {
        $scrub = Scrub::find()->all();

        return $this->render('scrub', compact('scrub'));
    }

    public function actionSauna() {
        $sauna = Sauna::find()->all();

        return $this->render('sauna', compact('sauna'));
    }

    public function actionKhammam() {
        $khammam = Khammam::find()->all();

        return $this->render('khammam', compact('khammam'));
    }

    public function actionDzhakuzi() {

        $dzhakuzi = Dzhakuzi::find()->all();

        return $this->render('dzhakuzi', compact('dzhakuzi'));
    }

    public function actionSpa() {

        return $this->render('spa');
    }

    public function actionHall1() {

        return $this->render('hall1');
    }

    public function actionHall2() {

        return $this->render('hall2');
    }

    public function actionSolarium() {

        return $this->render('solarium');
    }
    
        public function actionMassage2() {

        return $this->render('massage2');
    }

}
