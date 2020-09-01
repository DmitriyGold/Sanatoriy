<?php
$this->title = 'Инфраструктура';
$this->params['breadcrumbs'][] = $this->title;

use app\widgets\Gallery1Widget;
?>

<div class="my-2 pt-2 container">
    <h4 class="text-center my-4">Инфраструктура.</h4> 
</div>

<div  class="parallax1_1"></div>


<div class="mt-2 pt-2 container-fluid my-background-col">

    <div class="row text-center">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4">
                    <div class="row  justify-content-center">
                        <h5>главный корпус</h5>
                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 my-2',
                            'image' => '\images\infrastructure\IMG_20200623_190529.jpg',
                        ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="row">
                            <h5>лечебный корпус</h5>
                        </div>
                        <div class="row">

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12 col-lg-6 my-2',
                                'image' => '\images\infrastructure\IMG_20200623_171345.jpg',
                            ])
                            ?>

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12  col-lg-6 my-2',
                                'image' => '\images\infrastructure\PANO_20200623_171716.jpg',
                            ])
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div  class="parallax1_3"></div>

<div class="mt-3 pt-3 container-fluid my-background-col">
    <div class="container py-3">

        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h5>SPA-центр</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_190158.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200609_161937.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200609_162549.jpg',
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container py-3">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h5>рестораны "Причал", "Союз", шведский стол, бары</h5>
        </div>
        <div class="col-12">
            <div class="row">
                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-4 my-2',
                    'image' => '\images\infrastructure\IMG_20200623_180343.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-4 my-2',
                    'image' => '\images\infrastructure\36781468.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-4 my-2',
                    'image' => '\images\infrastructure\IMG_20200609_154743.jpg',
                ])
                ?>
            </div>
        </div>
    </div>


</div>

<div  class="parallax1_4"></div>



<div class="mt-3 pt-3 container-fluid my-background-col">
    <div class="container py-3">

        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h5>свыше 30 коттеджей и домиков для проживания</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_183345.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_183756.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_184434.jpg',
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="container py-3">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h5>открытый подогреваемый бассейн</h5>
        </div>
        <div class="col-12">
            <div class="row">
                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\IMG_20200623_172035.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\IMG_20200623_172142.jpg',
                ])
                ?>

            </div>
        </div>
    </div>
</div>

<div  class="parallax1_2"></div>



<div class="mt-3 pt-3 container-fluid my-background-col">
    <div class="container py-3">

        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h5>теннисные корты, футбольные поля, волейбольно-баскетбольные площадки</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_173624.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_185156.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200609_170031.jpg',
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h5>открытые беседки и веранды, шашлычные (шатры)</h5>
        </div>
        <div class="col-12">
            <div class="row">
                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\27537493975_20d4da3c8b_o.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\IMG_20200623_185841.jpg',
                ])
                ?>

            </div>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h5>детские городки:</h5>
        </div>
    </div>
</div>

<div  class="parallax1_5"></div>



<div class="mt-3 pt-3 container-fluid my-background-col">
    <div class="container py-3">

        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h5>зоопарк</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\3IMG_20200623_181802.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200623_174735.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12  col-lg-4 my-2',
                        'image' => '\images\infrastructure\IMG_20200609_170607.jpg',
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container py-3">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h5>конный двор</h5>
        </div>
        <div class="col-12">
            <div class="row">
                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\unnamed-file.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6 my-2',
                    'image' => '\images\infrastructure\IMG_20200623_175054.jpg',
                ])
                ?>

            </div>
        </div>
    </div>
</div>

<div  class="parallax1_6"></div>

<div class="mt-2 pt-2 container-fluid my-background-col">

    <div class="row text-center">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-5 text-center text-lg-left my-2">
                    <h5 class="my-3">благоустроенный пляжный комплекс  (собственный, оборудованный)</h5>        
                </div>


                <div class="col col-lg-7">
                    <div class="row">
                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 col-lg-6 my-2',
                            'image' => '\images\infrastructure\IMG_20200623_180156.jpg',
                        ])
                        ?>

                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 col-lg-6 my-2',
                            'image' => '\images\infrastructure\IMG_20200623_180356.jpg',
                        ])
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="mt-2 pt-2 container-fluid">

    <div class="row text-center">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4">
                    <div class="row  justify-content-center">
                        <h5>картинг</h5>
                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 my-2',
                            'image' => '\images\infrastructure\IMG_20200623_173140.jpg',
                        ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="row">
                            <h5>тренажёрный зал</h5>
                        </div>
                        <div class="row">

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12 col-lg-6 my-2',
                                'image' => '\images\infrastructure\IMG_20200609_164903.jpg',
                            ])
                            ?>

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12  col-lg-6 my-2',
                                'image' => '\images\infrastructure\IMG_20200609_165024.jpg',
                            ])
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div  class="parallax1_7"></div>

<div class="mt-2 pt-2 container-fluid my-background-col">

    <div class="row text-center">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-4">
                    <div class="row  justify-content-center">
                        <h5>солярий</h5>
                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 my-2',
                            'image' => '\images\infrastructure\IMG_20200609_164748.jpg',
                        ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="row">
                            <h5>танцевальный зал</h5>
                        </div>
                        <div class="row">

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12 col-lg-6 my-2',
                                'image' => '\images\infrastructure\IMG_20200609_165500.jpg',
                            ])
                            ?>

                            <?=
                            Gallery1Widget::widget([
                                'col' => 'col-12  col-lg-6 my-2',
                                'image' => '\images\infrastructure\IMG_20200609_165320.jpg',
                            ])
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container py-3">
    <div class="row my-3 text-center ">
        <div class="col col-lg-7">
            <div class="row">
                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12  col-lg-6  my-2',
                    'image' => '\images\infrastructure\IMG_20200609_155321.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 col-lg-6   my-2',
                    'image' => '\images\infrastructure\IMG_20200609_155633.jpg',
                ])
                ?>
            </div>
        </div>

        <div class="col-12 col-lg-5 text-center text-lg-right my-2">
            <h5 class="my-3">финская и турецкая сауна, русская баня</h5>        
        </div>

    </div>
</div>


<div class="mt-2 pt-2 container-fluid my-background-col">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <p><strong>а также:</strong></p>
                <ul>
                    <li>настольный теннис</li>
                    <li>киноконцертный зал;</li>
                    <li>бильярд; 
                    <li>тир;</li>
                    <li>лазертаг;</li>
                    <li>квадроциклы;</li>
                    <li>пункт проката спортивного инвентаря;</li>
                    <li>фитнес-центр</li>
                    <li>автостоянка на территории санатория</li>
                </ul>
            </div>
        </div>
    </div>
</div>

