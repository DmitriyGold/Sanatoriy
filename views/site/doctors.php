<?php
$this->title = 'Наши врачи';
$this->params['breadcrumbs'][] = $this->title;

use app\widgets\DoctorWidget;
?>
<div class="mt-2 pt-2 container-fluid">

    <div class="container">
        <h4 class="mt-5 mb-3 text-center"><?= $this->title ?></h4>

        <div class="row my-4">
            <p><strong>В нашем санатории-профилактории трудятся специалисты высокого уровня, которые применяют 
                    все свои силы и знания для решения проблем, связанных с вашим здоровьем!</strong></p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 justify-content-between">       

        <?php foreach ($doctor as $value) { ?>

            <?=
            DoctorWidget::widget(['id' => $value->id,
                'fio' => $value->fio,
                'image' => $value->image,
                'description1' => $value->description1
            ]);
            ?>  

        <?php } ?>
    </div>

    <div class="block-3px my-4"></div>
</div>  
