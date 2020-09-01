<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schedule')->textInput(['maxlength' => true]) ?>

    <div class="row justify-content-start text-left align-items-end">

        <div class="col-3">
            <?=
            $form->field($model, 'sort')->dropDownList([
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5
            ])
            ?> 
        </div>
        <div class="col-2">
            <?= $form->field($model, 'hide')->checkbox() ?>
        </div>
    </div>

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
