<?php
$this->title = 'Дерматология. Косметология.';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mt-3 pt-3 container">
    <h4 class="mt-3 mb-5">Дерматология. Косметология.</h4>

    <h5>Дерматологический пиллинг:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-8 my-border-r">Наименование</div>     
        <div class="col-3">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($pilling as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px my-4"></div>

    <h5>Проведение эпиляции:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-7 my-border-r">Наименование</div>     
        <div class="col-2 my-border-r">Стоимость от, руб</div>
        <div class="col-2">до, руб</div>        
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($cosmetology as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>              
                    <div class="col-2 my-border-r"><?= $value->price1 ?></div>
                    <div class="col-2"><?= $value->price2 ?></div>                    
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-7 my-border-r"><?= $value->name ?></div>              
                    <div class="col-2 my-border-r"><?= $value->price1 ?></div>
                    <div class="col-2"><?= $value->price2 ?></div>                    
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px my-4"></div>    

    <h5>Дарсонвализация кожи:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-8 my-border-r">Наименование</div>     
        <div class="col-3">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($leather as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px my-4"></div>  


    <h5>Массаж лица:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-8 my-border-r">Наименование</div>     
        <div class="col-3">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($cosmet4 as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px my-4"></div>  


    <h5>Ультразвуковое лечение кожи:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-8 my-border-r">Наименование</div>     
        <div class="col-3">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($cosmet5 as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px my-4"></div>  


    <h5>Криомассаж:</h5>     

    <div class="row block-tabl-1 py-1">
        <div class="col-1 my-border-r">№</div>
        <div class="col-8 my-border-r">Наименование</div>     
        <div class="col-3">Стоимость, руб</div>
    </div>    

    <?php $i = 0; ?>
    <?php foreach ($cosmet6 as $value) { ?>
        <?php
        if ($value->hide == 0) {
            $i++;
            if (($i % 2) == 0) {
                ?>
                <div class="row  block-tabl-2 py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

            <?php } else { ?> 
                <div class="row my-border-b py-1">
                    <div class="col-1 my-border-r"> <?= $i ?></div>
                    <div class="col-8 my-border-r"><?= $value->name ?></div>              
                    <div class="col-3"><?= $value->price1 ?></div>
                </div> 

                <?php
            }
        }
    }
    ?>   

    <div class="block-3px mt-4"></div>
    
    <div class="row">
        <div class="col p-0 m-0 mb-5">* Информация на сайте не является публичной офертой.</div>
    </div>


</div>  
