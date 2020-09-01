<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Consultations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consultations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price2')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['name' => 'ok', 'class' => 'btn btn-success']) ?>        
                <?= Html::a(Yii::t('app', 'Отмена'), ['index'], ['class' => 'btn btn-primary']) ?>        
            </div>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>
