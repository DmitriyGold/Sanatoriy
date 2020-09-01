<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\db\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_text')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'detailed_text')->textarea(['rows' => 12]) ?>

    <?php
    if (!($model->date)) {
        $model->date = date("Y.m.d");
    }
    echo $form->field($model, 'date')->widget(DateTimePicker::className(), [
        'name' => 'dp_1',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты/времени...'],
        'convertFormat' => true,
        'value' => date("Y.m.d", (integer) $model->date),
        'pluginOptions' => [
            'format' => 'Y.m.d',
            'autoclose' => true,
            'weekStart' => 1, //неделя начинается с понедельника
            //'startDate' => '01.05.2015 00:00', //самая ранняя возможная дата
            'todayBtn' => true, //снизу кнопка "сегодня"
        ]
    ]);
    ?>

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
