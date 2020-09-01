<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\BellForm;
use app\models\db\Profiles;
use app\models\db\Doctor;
use app\models\db\Reservation;
use app\models\db\Diet1;
use app\models\db\Diet2;
use app\models\db\News;
use app\models\db\Promotions;
use app\models\db\Bell;
use app\models\db\Schedule;
use app\models\db\Mainnews;
use app\models\db\Vouchers;
use app\models\db\Services;

class SiteController extends AppController {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'foreColor' => 0x000000, // цвет символов
                'minLength' => 3, // минимальное количество символов
                'maxLength' => 4, // максимальное
                'offset' => 7, // расстояние между символами (можно отрицательное)
                'testLimit' => 2, // значение того сколько раз та же каптча, будет отображаться. 
////Влияет только на ошибочный ввод каптчи (на простой refresh не влияет)
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {

        $news = News::find()
                ->where(['hide' => 0])
                ->orderBy('date DESC')
                ->asArray()
                ->all();

        $mainNews = Mainnews::find()
                ->where(['hide' => 0])
                ->asArray()
                ->all();

        $promotions = Promotions::find()
                ->where(['hide' => 0, 'archive' => 0])
                ->orderBy('dateEnd DESC')
                ->asArray()
                ->all();

        $services_1 = Services::find()
                ->where(['hide' => 0, 'sort' => 1])
                ->asArray()
                ->all();

        $services_2 = Services::find()
                ->where(['hide' => 0, 'sort' => 2])
                ->asArray()
                ->all();

        return $this->render('index', compact('news', 'mainNews', 'promotions', 'services_1', 'services_2'));
    }

    public function actionMainnews() {

        $model = Mainnews::find()
                ->where(['hide' => 0])
                ->asArray()
                ->all();

        return $this->render('mainnews', compact('model'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {

        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

    public function actionSchedule() {
        $model = Schedule::find()
                ->orderBy('sort')
                ->where(['hide' => 0])
                ->asArray()
                ->all();

        return $this->render('schedule', compact('model'));
    }

    public function actionInfrastructure() {
        return $this->render('infrastructure');
    }

    public function actionLicense() {
        return $this->render('license');
    }

    public function actionSupervision() {
        return $this->render('supervision');
    }

    public function actionRequisites() {
        return $this->render('requisites');
    }

    public function actionMuseums() {
        return $this->render('museums');
    }

    public function actionPage_profiles() {

        $profiles = Profiles::find()->all();

        return $this->render('page_profiles', compact('profiles'));
    }

    public function actionDoctors() {

        $doctor = Doctor::find()
                ->orderBy(['sort' => SORT_ASC, 'id' => SORT_ASC])
                ->where(['hide' => 0])
                ->all();

        return $this->render('doctors', compact('doctor'));
    }

    public function actionDoctor_more($id) {

        if (($model = Doctor::findOne($id)) !== null) {

            return $this->render('doctor_more', [
                        'model' => $model,
            ]);
        }
        return false;
    }

    public function actionConditions() {
        return $this->render('conditions');
    }

    public function actionNutrition() {
        return $this->render('nutrition');
    }

    public function actionInfo() {
        return $this->render('info');
    }

// сделать заявку на бронирование
    public function actionReservation() {

        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {

                Yii::$app->session->setFlash('name', $model->name);
                Yii::$app->session->setFlash('phone', $model->phone);
                Yii::$app->session->setFlash('email', $model->email);

                if (($model->date_begin) <> null)
                    Yii::$app->session->setFlash('date_begin', 'Дата заезда: ' . $model->date_begin);

                if (($model->date_end) <> null)
                    Yii::$app->session->setFlash('date_end', 'Дата отъезда: ' . $model->date_end);

                (($model->conditions[0]) === 0) ?
                                $message = 'По медицинским показаниям. Направление врача мед. справка ф 070-у' : $message = 'Оздоровительный отдых (без мед. справки ф 070-у)';

                Yii::$app->session->setFlash('conditions', $message);

                if (($model->body) <> null)
                    Yii::$app->session->setFlash('body', 'Ваше сообщение: <br>' . $model->body);

                $file_in = UploadedFile::getInstance($model, 'uploadFile');
                $model->uploadFile = UploadedFile::getInstance($model, 'uploadFile'); // преобразовали файл из формы в объект
                // отправляем письмо с данными заказа на корпоративную почту
                Yii::$app->mailer->compose('order', ['model' => $model])
                        ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                        ->setTo('shig-2011@mail.ru')
                        ->setSubject('Заявка на бронирование. Сайт Санаторий-провилакторий МИД')
                        ->setHtmlBody("<b><strong>$model->name</strong></b>"
                                . "<b>$model->phone</b>"
                                . "<b>$model->email</b>"
                                . "<b>$model->date_begin</b>"
                                . "<b>$model->date_end</b>"
                                . "<b>$model->conditions</b>" // условия санаторно-курортного лечения
                                . "<b>$file_in->name</b>"
                                . "<b>$model->body</b>")
                        ->send();

                // дублируем данные в базе данных
                $order = new Reservation();

                $order->name = $model->name;
                $order->email = $model->email;
                $order->phone = $model->phone;
                $order->date_order = date("Y-m-d");
                $order->date_begin = $model->date_begin;
                $order->date_end = $model->date_end;
                $order->conditions = $message;
                if (($file_in->name) <> null) {
                    $order->nameFile1 = md5(microtime() . rand(0, 9999)) . '.' . $file_in->extension;
                    $order->nameFile2 = $file_in->name;
                    Yii::$app->session->setFlash('file_in', 'Файл: ' . $file_in->name);
                }
                $order->body = $model->body;

                $order->save();

                if (isset($model->uploadFile)) {
                    $model->uploadFile->saveAs('uploads/order/' . $order->nameFile1);
                }

                Yii::$app->session->setFlash('success', "Спасибо. Данные успешно записаны.<br> Наш сотрудник обязательно свяжется с Вами.");
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка. Проверьте ввод данных.');
            }
        }

        return $this->render('reservation', [
                    'model' => $model,
        ]);
    }

    public function actionDiet() {

        $model_1 = Diet1::find()->all();
        $model_2 = Diet2::find()->all();

        return $this->render('diet', compact('model_1', 'model_2'));
    }

    public function actionBell() {

        $model = new BellForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate()) {

                Yii::$app->session->setFlash('name', $model->name);
                Yii::$app->session->setFlash('phone', $model->phone);

                if (($model->body) <> null)
                    Yii::$app->session->setFlash('body', 'Ваше сообщение: <br>' . $model->body);


                // отправляем письмо с данными заказа на корпоративную почту
                Yii::$app->mailer->compose('order', ['model' => $model])
                        ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                        ->setTo('shig-2011@mail.ru')
                        ->setSubject('Заказать звонок. Сайт Санаторий-провилакторий МИД')
                        ->setHtmlBody("<b><strong>$model->name</strong></b>"
                                . "<b>$model->phone</b>"
                                . "<b>$model->body</b>")
                        ->send();

                // дублируем данные в базе данных
                $order = new Bell();

                $order->name = $model->name;
                $order->phone = $model->phone;
                $order->date_bell = date("Y-m-d");
                $order->body = $model->body;

                $order->save();

                Yii::$app->session->setFlash('success', "Спасибо. Данные успешно записаны.<br> Наш сотрудник обязательно свяжется с Вами.");
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка. Проверьте ввод данных.');
            }
        }

        return $this->render('bell', [
                    'model' => $model,
        ]);
    }

    public function actionNews($id) {

        if (($model = News::findOne($id)) !== null) {
            return $this->render('news', [
                        'model' => $model,
            ]);
        }
        return false;
    }

    public function actionNewsAll() {

        $model = News::find()
                ->where(['hide' => 0])
                ->orderBy('date DESC')
                ->asArray()
                ->all();

        return $this->render('news_all', [
                    'model' => $model,
        ]);
    }

    public function actionPromotion($id) {

        if (($model = Promotions::findOne($id)) !== null) {
            return $this->render('promotion', [
                        'model' => $model,
            ]);
        }
        return false;
    }

    public function actionPromotions() {

        $model = Promotions::find()
                ->where(['hide' => 0, 'archive' => 0])
                ->orderBy('dateEnd DESC')
                ->asArray()
                ->all();

        $model_arx = Promotions::find()
                ->where(['hide' => 0, 'archive' => 1])
                ->orderBy('dateEnd DESC')
                ->asArray()
                ->all();

        return $this->render('promotions', [
                    'model' => $model,
                    'model_arx' => $model_arx,
        ]);
    }

    public function actionVouchers() {

        $model = Vouchers::find()
                ->where(['hide' => 0])
                ->orderBy('date DESC')
                ->asArray()
                ->all();

        return $this->render('vouchers', [
                    'model' => $model,
        ]);
    }

    public function actionNerves() { //нервы
        return $this->render('nerves');
    }

    public function actionBones() {  //скелет
        return $this->render('bones');
    }

    public function actionHeart() { //сердце
        return $this->render('heart');
    }

    public function actionStomach() { //желудок
        return $this->render('stomach');
    }

    public function actionLungs() { //легкие
        return $this->render('lungs');
    }

    
}
