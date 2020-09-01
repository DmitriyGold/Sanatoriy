<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



/* @var $this yii\web\View */
/* @var $model app\models\db\Fotobankcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="my-5">

        <h3  class="my-5">Загрузить фотографию</h3>
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($fileImg, 'image')->fileInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>