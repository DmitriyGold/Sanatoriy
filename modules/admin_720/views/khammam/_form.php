<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Khammam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khammam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'description1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hide')->checkbox() ?>

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