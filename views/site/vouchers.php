<?php

use yii\helpers\Url;

$this->title = 'Путевки';
$this->params['breadcrumbs'][] = '';
?>
<div class="container-fluid">

    <div class="row mt-5 pt-4 pt-md-0 mt-xl-4 justify-content-center">
        <h3><?= $this->title ?>:</h3>
    </div>

    <?php if (isset($model)) {?>
    
    <?php } ?>
    
    <div class="row justify-content-center" >

        <?php foreach ($model as $value) { ?>
            <div class="row m-3 shadow bg-white rounded block-news">
                <div class="col-12 py-2 text-right border-bottom">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?= $value['date'] ?>
                </div>

                <?php if (!empty($value['imagePath'])) { ?>                
                    <div class="col-12 col-lg-9 mt-4">
                    <?php } else { ?>
                    <div class="col-12 mt-4">
                    <?php } ?>
                        
                    <div class="col">

                        <div class="col pt-3 text-center">
                            <h6 style="color: #79A62F;"><?= mb_strtoupper($value['title'], 'UTF-8') ?></h6>
                        </div>
                        <div class="col pt-2">
                            <p><strong><i><?= nl2br($value['short_text']) ?></i></strong></p>
                        </div>
                        <div class="col pt-2 pb-xl-3">
                            <h6><?= nl2br($value['subtitle_1']) ?></h6>
                            <p><?= nl2br($value['detailed_text1']) ?></p>
                        </div>
                        <div class="col pt-2 pb-xl-3">
                            <h6><?= nl2br($value['subtitle_2']) ?></h6>
                            <p><?= nl2br($value['detailed_text2']) ?></p>
                        </div>
                        <div class="col pt-2 pb-xl-3">
                            <h6><?= nl2br($value['subtitle_3']) ?></h6>
                            <p><?= nl2br($value['detailed_text3']) ?></p>
                        </div>

                        <div class="col pt-2 pb-xl-3">
                            <?php if (!empty($value['file1Name']))  ?>
                            <a href="<?= Url::to(['/uploads/vouchers/' . $value['file1Path']]); ?>" target="target-blank"><strong>
                                    <?= $value['file1Name'] ?>
                                </strong></a><br> 
                            <?php if (!empty($value['file2Name']))  ?>
                            <a href="<?= Url::to(['/uploads/vouchers/' . $value['file2Path']]); ?>" target="target-blank"><strong>
                                    <?= $value['file2Name'] ?>
                                </strong></a> <br> 
                            <?php if (!empty($value['file3Name']))  ?>
                            <a href="<?= Url::to(['/uploads/vouchers/' . $value['file3Path']]); ?>" target="target-blank"><strong>
                                    <?= $value['file3Name'] ?>
                                </strong></a> 
                        </div>                        
                    </div>
                </div>
                <?php if (!empty($value['imagePath'])) { ?>
                    <div class="col-12 col-lg-3 align-self-center text-center">
                        <img src="<?= Url::to('@web/uploads/vouchers/' . $value['imagePath']) ?>" alt="картинка к путевке"  
                             style="max-width: 250px; border: 4px solid #D2E8F2;">
                    </div>
                <?php } ?>

            </div>
            <?php
        }
        ?>
    </div>

</div>

