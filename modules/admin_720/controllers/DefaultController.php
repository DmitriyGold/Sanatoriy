<?php

namespace app\modules\admin_720\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin_720` module
 */
class DefaultController extends AppController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
