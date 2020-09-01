<?php
$this->title = 'Интересные места';
$this->params['breadcrumbs'][] = '';

use yii\helpers\Url;
use app\widgets\Gallery1Widget;
?>
<div class="my-2 pt-2 container">
    <h4 class="my-3">Интересные места рядом с санаторием-профилакторием «СОЮЗ».</h4> 
</div>


<div class="mt-2 pt-2 container-fluid my-background-col">

    <div class="row text-center">
        <div class="container py-3">
            <div class="row my-3 text-center ">
                <div class="col-12 col-lg-5 text-center text-lg-left my-2">
                    <h5 class="my-3">Центральный музей Военно-Воздушных Сил РФ (12 км)</h5>        
                    <p> Музей истории развития авиационных технологий, располагается в посёлке Монино. 
                        Создан 28 ноября 1958 года, а открыт для приёма посетителей 23 февраля 1960 года. 
                        Музей обладает богатой экспозицией вертолётов и самолётов как гражданского, так и военного 
                        назначения, а также оружия, инструментов, униформы, художественных работ. Есть зарубежная
                        экспозиция, в которой представлена авиационная техника времён Второй мировой войны[источник 
                        не указан 2610 дней]. Экспонаты расположены под открытым небом, а также в 3-х залах- ангарах
                        и 2 залах.<br>
                        Сайт: <a href="http://moninomuseum.ru" target="target_blank">http://moninomuseum.ru</a>
                    </p>
                </div>


                <div class="col col-lg-7">
                    <div class="row">
                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 my-2',
                            'image' => '\images\interesting places\1_1.jpg',
                        ])
                        ?>

                        <?=
                        Gallery1Widget::widget([
                            'col' => 'col-12 my-2',
                            'image' => '\images\interesting places\1_2.jpg',
                        ])
                        ?>
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
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\2_1.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\2_2.jpg',
                ])
                ?>
            </div>
        </div>

        <div class="col-12 col-lg-5 text-center text-lg-left my-2">
            <h5 class="my-3">Военно-технический музей (12 км)</h5>        
            <p>На территории наукограда Черноголовка, расположенного в 40 км от Москвы, в селе Ивановское, 
                открыт Военно-технический музей, посвященный истории гражданской и военной техники. <br>

                Музей является государственным учреждением культуры Московской области. <img src=""/>
                Его экспозиция в течение нескольких лет создавалась усилиями энтузиастов и увлеченных людей и 
                представляет собой совместный проект с Национально-патриотическим музеем «Боевого братства» и  
                учреждением "Военно-технический музей мужества , доблести и славы ". Сегодня собрание музея 
                объединяет образцы техники Советского Союза, Германии, Франции, США, Японии, других зарубежных 
                стран и охватывает более чем 100-летний период: с конца ХIХ века до наших дней.
            </p>
            Сайт: <a href="http://гвтм.рф" target="target_blank">http://гвтм.рф</a>
        </div>

    </div>
</div>


<div class="my-background-col">
    <div class="container py-3">
        <div class="row my-3 text-center ">
            <div class="col-12 col-lg-5 text-center text-lg-left my-2">
                <h5 class="my-3">Музей истории военной формы одежды (7 км)</h5>        
                <p>Уникальный Музей истории военной формы, где собрана наиболее полная коллекция 
                    образцов форменной одежды военнослужащих, включая обмундирование российских 
                    императоров и советских военачальников, находится в подмосковном Щелкове. 
                </p><br>
                <p>Адрес: Московская область, город Щелково, улица Беляева, опытно-конструкторская база.<br>
                    Телефоны: 8 (496) 253-84-95, 8 (499) 671-64-25.
                </p>
            </div>

            <div class="col col-lg-7">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\3_1.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\3_2.jpg',
                    ])
                    ?>
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
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\4_1.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\4_2.jpg',
                ])
                ?>
            </div>
        </div>

        <div class="col-12 col-lg-5 text-center text-lg-left my-2">
            <h5 class="my-3">Музей Войск противовоздушной обороны (25 км)</h5>        
            <p> В 25 км от санатория –профилактория «Союз», в окружении лесного массива,
                недалеко от живописного озера расположился уникальный по представленной экспозиции
                и единственный в Европе музей истории Войск ПВО. Коллекция музея насчитывает более 
                16 тысяч экспонатов, 400 из которых – реальные образцы боевой техники и вооружения. 
                Знакомство с ними предоставит Вам редкую возможность открыть для себя малоизвестные 
                факты из истории нашей страны, позволит по-новому взглянуть на многие события не столь
                далекого прошлого</p>
            <p>Адрес: Московская область, г. Балашиха, микрорайон Заря,улица Ленина, д. 6<br>
                Тел.: +7 (498) 665-1373<br>
                Тел.: +7 (498) 665-4138<br>
                Сайт: <a href="http://www.mvpvo.ru" target="target_blank">http://www.mvpvo.ru</a></p>

        </div>

    </div>
</div>



<div class="my-background-col">
    <div class="container py-3">
        <div class="row my-3 text-center ">
            <div class="col-12 col-lg-5 text-center text-lg-left my-2">
                <h5 class="my-3">Экскурсии в Звездный городок (7 км)</h5>        
                <p> Побывать у истоков не только отечественной, но и мировой космонавтики, узнать, 
                    где закладывался фундамент будущих космических открытий, увидеть, где и как готовились
                    к полетам первые космонавты Земли. истории создания Центра и увидите не только
                    уникальные исторические экспонаты, но и действующие тренажеры, ведь 
                    Центр подготовки сейчас – это действующий объект, где проходят подготовку все 
                    международные экипажи перед полетом на МКС.</p>
                <p>Тел: +7 (495) 740-97-22<br>
                    Сайт: <a href="http://www.gctc.ru/" target="target_blank">http://www.gctc.ru/</a></p>
            </div>

            <div class="col col-lg-7">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\5_1.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\5_2.jpg',
                    ])
                    ?>
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
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\6_1.jpg',
                ])
                ?>

                <?=
                Gallery1Widget::widget([
                    'col' => 'col-12 my-2',
                    'image' => '\images\interesting places\6_2.jpg',
                ])
                ?>
            </div>
        </div>

        <div class="col-12 col-lg-5 text-center text-lg-left my-2">
            <h5 class="my-3">Экскурсия по музею ЦПК имени Ю.А. Гагарина.(7 км)</h5>        
            <p>Музей является известным историко-научным и культурно-просветительным учреждением. 
                В нём собираются, сохраняются и популяризуются памятники истории пилотируемой космонавтики,
                подготовки и осуществления исследований в космосе с непосредственным участием человека.<br>

                В фондах музея насчитывается свыше 21 тысячи единиц хранения, из которых 2 тысячи представлены 
                в экспозиции 4-х залов музея, среди них первый космический тренажёр «Восток», спускаемый аппарат 
                космического корабля «Союз-4», теплозащитный костюм полётного скафандра Ю.А. Гагарина, 
                парадный мундир  и награды 1-го космонавта.</p><br>
            <p>Сайт: <a href="http://www.gctc.ru/main.php?id=151">http://www.gctc.ru</a></p>
        </div>

    </div>
</div>


<div class="my-background-col">
    <div class="container py-3">
        <div class="row my-3 text-center ">
            <div class="col-12 col-lg-5 text-center text-lg-left my-2">
                <h5 class="my-3">Николо-Берлюковский монастырь (5 км)</h5>        
                <p>Монастырь на окраине деревни Авдотьино, вблизи реки Вори, в 42 км к северо-востоку 
                    от Москвы, на территории Ногинского района Московской области.</p>
                <p>Московская область, Ногинский район, д. Авдотьино<br>
                    Тел: 8 (968) 374-11-07<br>
                    Сайт: <a href="https://www.berluki.ru" target="target_blank">https://www.berluki.ru</a></p>
            </div>

            <div class="col col-lg-7">
                <div class="row">
                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\7_1.jpg',
                    ])
                    ?>

                    <?=
                    Gallery1Widget::widget([
                        'col' => 'col-12 my-2',
                        'image' => '\images\interesting places\7_2.jpg',
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>