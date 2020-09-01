<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="keywords" content="санаторий в Подмосковье, профилакторий в Подмосковье, 
              санаторий союз, санаторий союз мид, санаторий союз мид россии, Cанаторий-профилакторий в МО, 
              санаторий мид, санаторий мид рф, санаторий мид рф в подмосковье, санаторий мид рф московская область, 
              санаторий мид щелковский район, санаторий-профилакторий, 
              официальный сайт санаторий МИД России, санаторий союз, санаторий щёлково, 
              санаторий в Подмосковье, оздоровительный отдых в Подмосковье, санаторий путевка, 
              санаторий без мед. справки, санаторные услуги, санаторий бронирование, санаторий МИД купить путевку,
              контакты санатория МИД России, питание в санатории, санаторий мид питание, хороший санаторий,
              телефон санаторий МИД России, программы санатория МИД, лечебный курс в санатории">
        <meta name="author" content="Золотов Дмитрий Сергеевич">
        <meta name="description" content="Санаторий-профилакторий «Курорт-парк «Союз» МИД России». Официальный сайт">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <header class="header fixed-top container-fluid">

                <div class=" header-top">

                    <div class="container">                            

                        <div class="row p-0 m-0 pt-2">

                            <div class="col-md-2 text-center d-none d-md-block">                          
                                <a href="<?= Url::to(['/site/index']); ?>">
                                    <img class="my-logo m-2" style="width: 80px;" src="<?= Url::to('@web/images/soyuz-logo.jpg') ?>" alt="Логотип">
                                </a>
                            </div>                            

                            <div class="col-md-4 text-left d-none d-md-block">                                                                                            
                                <p>Все условия для эффективного лечения </br>и комфортного отдыха</p>
                            </div>  
                            <div class="col-12 text-center d-md-none">                                                                                            
                                <p>Санаторий-профилакторий «Курорт-парк «Союз» МИД России»</p>
                            </div>  

                            <div class="col-md-4  text-left d-none d-md-block">                                                                                          
                                <p><i class="fa fa-phone" aria-hidden="true"></i> reception: <strong>+7(495)229-30-99</strong><br>
                                    FAX: <strong>+7(496)567-38-59</strong></p>
                            </div>   

                            <div class="col-12 text-center d-md-none pb-2">                                                                                          
                                <span><i class="fa fa-phone" aria-hidden="true"></i> reception:  <strong>+7(495)229-30-99</strong>, 
                                    FAX: <strong>+7(496)567-38-59</strong></span>
                            </div> 
                        </div> 

                        <div class="row m-0 p-0">

                            <div class="d-none col-4 text-left align-self-md-center">
                                <!--  Показываем панель админки -->
                                <?php if ((!Yii::$app->user->isGuest) && (Yii::$app->user->identity->role === 'admin')) : ?>
                                    <span class="small"><a href = "#">Админка</a></span>                                   
                                <?php endif; ?>
                            </div>

                            <div class="d-none col-8 text-right align-self-md-center">
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                    <span class="small"><a href = "#" class = "nav-link"><?= Yii::$app->user->identity['username'] ?> Выход</a></span>                                    
                                <?php else : ?>

                                    <span class="small"><a href = "#">Вход</a></span>
                                    <span class="small"><a href = "#">Регистрация</a></span>
                                <?php endif; ?>
                            </div>   
                        </div> 
                    </div>

                </div> 


                <div class="header-bottom">                        
                    <div class="container">
                        <nav  class="col-12 pt-0">
                            <ul class="navbar-nav flex-sm-row justify-content-sm-between align-items-center">
                                <li class="nav-item  active px-2"> <a class="dropdown-item" href="<?= Url::to(['/admin_720']) ?>">Админ панель</a></li>
                            </ul>  
                        </nav>                                                     
                    </div>
                </div>

            </header>

            <div class="container-fluid">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer pb-3">
            <div class="container-fluid">
                <div class="row align-items-start "> 

                    <div class="col-6 text-left pl-5">
                        <p class="pull-left"> <strong>&copy; </strong>2017 -
                            <?= date('Y') ?>. Официальный сайт санатория-профилактория
                            «Курорт-парк «Союз» Министерства иностранных дел Российской Федерации», Все права защищены.</p>   
                    </div>
                    <div class="col-4 text-center ">
                        <p>приемная: +7(495)993-02-06, +7(49656)738-71</p>                                
                    </div>
                    <div class="col-2 text-lg-right text-center  pr-5">

                    </div>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>                    
    </body>
</html>
<?php $this->endPage() ?>




