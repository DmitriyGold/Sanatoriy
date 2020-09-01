<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\captcha\Captcha;

$this->title = 'Оформить заявку';
$this->params['breadcrumbs'][] = '';
?>

<div class="container">
    <div class="site-contact text-center">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>    
</div>   

<div class="my-4 py-3 my-background-col text-center container-fluid">
    Мы очень рады что вы заинтересовались наши санаторием. 
    Санаторий-профилакторий «Курорт-парк «Союз» МИД России» одно из лучших мест 
    Подмосковья для оздоровления и отдыха. Заполните форму.
</div>  

<div class="container">

    <?php if (Yii::$app->session->hasFlash('success')): ?>

        <!-- данные переданы успешно. Выводим их на экран. --> 
        <div class="alert alert-success my-3 col-12" role="alert">

            <div class="row justify-content-center text-center mb-3"><strong><?= Yii::$app->session->getFlash('success'); ?></strong></div>
            <div class="row my-3 pl-5">
                Имя: <?= Html::encode(Yii::$app->session->getFlash('name')) ?><br>
            </div>

            <div class="row my-3 pl-5">
                Email: <?= Html::encode(Yii::$app->session->getFlash('email')) ?><br>
            </div>            

            <div class="row my-3 pl-5">
                Телефон: <?= Html::encode(Yii::$app->session->getFlash('phone')) ?><br>
            </div>


            <?php if (Yii::$app->session->hasFlash('date_begin')): ?> 
                <div class="row my-3 pl-5">
                    <?= Yii::$app->session->getFlash('date_begin') ?><br>
                </div>
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('date_end')): ?> 
                <div class="row my-3 pl-5">
                    <?= Yii::$app->session->getFlash('date_end') ?><br>
                </div>
            <?php endif; ?>

            <div class="row my-3 pl-5">
                <?= Yii::$app->session->getFlash('conditions') ?><br>
            </div>

            <?php if (Yii::$app->session->hasFlash('file_in')): ?> 
                <div class="row my-3 pl-5">
                    <?= Yii::$app->session->getFlash('file_in') ?><br>
                </div>
            <?php endif; ?>

            <?php if (Yii::$app->session->hasFlash('body')): ?> 
                <div class="row my-3 pl-5">
                    <?= Yii::$app->session->getFlash('body') ?><br>
                </div>
            <?php endif; ?>            


        </div> 

        <div class="col-lg-2 text-center text-lg-right align-self-lg-center p-0 m-0">
            <a href="/index">
                    на главную</button>
            </a>                                
        </div>   

    <?php endif; ?>

    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif; ?>


    <?php if (!Yii::$app->session->hasFlash('success')): ?>

        <div class="row" style="font-size: 12px">
            <div class="col">

                <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'phone') ?>

                <div class="row align-items-center my-5 my-background-col">   
                    <div class="col">
                        <p>Выберите даты Вашего пребывания в санатории</p>
                    </div>

                    <div 
                        class="col pt-3">
                            <?= $form->field($model, 'date_begin')->textInput(['type' => 'date']); ?>
                            <?= $form->field($model, 'date_end')->textInput(['type' => 'date']); ?> 
                    </div>
                </div>

                <?=
                $form->field($model, 'conditions[]')->dropdownList([
                    'По медицинским показаниям. Направление врача мед. справка ф 070-у',
                    'Оздоровительный отдых (без мед. справки ф 070-у)'
                ]);
                ?>                
                <div class="row my-5 my-background-col">
                    <div class="col pt-3">
                        <?= $form->field($model, 'uploadFile')->fileInput(); ?>
                    </div> 
                </div>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>


                <?= $form->field($model, 'consent')->checkbox() ?> 

                <a href="##" data-toggle="modal" data-target="#myModal">
                    <p>(на основании ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г.)</p>
                </a>   

                <!-- Согласие на обработку данных. модальное окно -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content px-5">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Согласие на обработку данных</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    Предоставляя свои персональные данные Пользователь даёт согласие на&nbsp;обработку, хранение и&nbsp;использование своих 
                                    персональных данных на&nbsp;основании ФЗ &#8470;&nbsp;152-ФЗ &laquo;О&nbsp;персональных данных&raquo; от&nbsp;27.07.2006&nbsp;г.&nbsp;в&nbsp;следующих целях:
                                    <ul>
                                        <li>Осуществление клиентской поддержки;</li>
                                        <li>Получения Пользователем информации о&nbsp;маркетинговых событиях;</li>
                                        <li>Проведения аудита и&nbsp;прочих внутренних исследований с&nbsp;целью повышения качества предоставляемых услуг.</li>
                                    </ul>
                                </div> 


                                <div class="row">
                                    Под персональными данными подразумевается любая информация личного характера, позволяющая установить 
                                    личность Пользователя/Покупателя такая как:
                                    <ul>
                                        <li>Фамилия, Имя, Отчество;</li>
                                        <li>Дата рождения;</li>
                                        <li>Контактный телефон;</li>
                                        <li>Адрес электронной почты;</li>
                                        <li>Почтовый адрес.</li>
                                    </ul>

                                    Персональные данные Пользователей хранятся исключительно на&nbsp;электронных носителях и&nbsp;обрабатываются 
                                    с&nbsp;использованием автоматизированных систем, за&nbsp;исключением случаев, когда неавтоматизированная обработка 
                                    персональных данных необходима в&nbsp;связи с&nbsp;исполнением требований законодательства.<br>
                                </div> 



                                <div class="row">Компания обязуется не&nbsp;передавать полученные персональные данные третьим лицам, за&nbsp;исключением следующих случаев:

                                    <ul>
                                        <li>По&nbsp;запросам уполномоченных органов государственной власти&nbsp;РФ только по&nbsp;основаниям и&nbsp;в&nbsp;порядке, установленным 
                                            законодательством РФ;</li>
                                        <li>Стратегическим партнерам, которые работают с&nbsp;Компанией для предоставления продуктов и&nbsp;услуг, или тем из&nbsp;них, 
                                            которые помогают Компании реализовывать продукты и&nbsp;услуги потребителям. Мы&nbsp;предоставляем третьим лицам минимальный 
                                            объем персональных данных, необходимый только для оказания требуемой услуги или проведения необходимой транзакции.</li>
                                    </ul>
                                </div> 


                                <div class="row">
                                    Компания оставляет за&nbsp;собой право вносить изменения в&nbsp;одностороннем порядке в&nbsp;настоящие правила, при условии, 
                                    что изменения не&nbsp;противоречат действующему законодательству РФ. Изменения условий настоящих правил вступают 
                                    в&nbsp;силу после их&nbsp;публикации на&nbsp;Сайте. 
                                </div>    


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>        
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row my-5 align-items-center my-background-col">
                    <div class="col-8 my-2">
                        <?=
                        $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' =>
                            '<div class="row align-items-center">'
                            . '<div class="col-sm-4 my-2">{image}'
                            . '</div>'
                            . '<div class="ml-sm-4 col-sm-4">{input}'
                            . '</div>'
                            . '</div>',
                        ])
                        ?>                        
                    </div>
                    <div class="col-4">
                        <div class="form-group my-4">
                            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>    
    <?php endif; ?>





</div>
