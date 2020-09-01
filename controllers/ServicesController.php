<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\db\Consultations;
use app\models\db\Procedures;
use app\models\db\Diagnostics;
use app\models\db\Physiotherapy;
use app\models\db\Hydrotherapy;
use app\models\db\Mud1;
use app\models\db\Massage;
use app\models\db\Lfk;
use app\models\db\Cosmetology;
use app\models\db\Pilling;
use app\models\db\Leather;
use app\models\db\Cosmet4;
use app\models\db\Cosmet5;
use app\models\db\Cosmet6;
use app\models\db\Info;

class ServicesController extends AppController {

    public function actionConsultations() {

        $consultations = Consultations::find()->all();
        $diagnostics = Diagnostics::find()->all(); 
        
        return $this->render('consultations', compact('consultations','diagnostics'));
    }

    public function actionProcedures() {

        $procedures = Procedures::find()->all();
       
        return $this->render('procedures', compact('procedures'));
    }

    public function actionPhysiotherapy() {

        $physiotherapy = Physiotherapy::find()->all();

        return $this->render('physiotherapy', compact('physiotherapy'));
    }

    public function actionHydrotherapy() {

        $hydrotherapy = Hydrotherapy::find()->all();
        $info = Info::find()->where(['type' => 1])->all();

        return $this->render('hydrotherapy', compact('hydrotherapy', 'info'));
    }

    public function actionMud() {

        $mud = Mud1::find()->all();

        return $this->render('mud', compact('mud'));
    }

    public function actionMassage() {

        $massage = Massage::find()->all();

        return $this->render('massage', compact('massage'));
    }    
 
        public function actionLfk() {

        $lfk = Lfk::find()->all();

        return $this->render('lfk', compact('lfk'));
    }  
    
    public function actionCosmetology() { // Дерматология и Косметология
        
        $cosmetology = Cosmetology::find()->all(); // таблица "проведение эпиляции"
        $pilling = Pilling::find()->all(); // таблица "дерматологический пиллинг"
        $leather = Leather::find()->all();     // таблица "дарсонвализация кожи"
        
        $cosmet4 = Cosmet4::find()->all(); // таблица "Массаж лица"
        $cosmet5 = Cosmet5::find()->all(); // таблица "Ультразвуковое лечение кожи"
        $cosmet6 = Cosmet6::find()->all(); // таблица "Криомассаж"
                       
        return $this->render('cosmetology', compact('cosmetology','pilling','leather','cosmet4','cosmet5','cosmet6'));
    }


}
