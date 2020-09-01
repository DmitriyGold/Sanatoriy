<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Fotobankcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container mt-5 pt-5">

    <div class="mt-5">
        <h3>Загрузить документ</h3>
    </div>
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($file, 'myFile')->fileInput(['maxlength' => true]) ?>
 
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Отмена'), ['index'], ['class' => 'btn btn-primary']) ?>           
    </div>

    <?php ActiveForm::end(); ?>

</div>