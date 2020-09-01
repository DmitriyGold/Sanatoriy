<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Fotobankcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container admin-top">

    <div class="admin-top">
        <h3>Загрузить картинку</h3>  
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($fileImg, 'image')->fileInput(['maxlength' => true]) ?>

    <hr>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Отмена'), ['index'], ['class' => 'btn btn-primary']) ?>           
    </div>

    <?php ActiveForm::end(); ?>

</div>