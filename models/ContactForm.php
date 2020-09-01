<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model {

    public $name;
    public $email;
    public $phone;
    public $date_begin; // заезд
    public $date_end; // отъезд
    public $conditions; // условия санаторно-курортного лечения
    public $uploadFile;
    public $body;
    public $consent;  // согласие на обработку данных 
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'consent', 'email'], 'required'],
            [['name', 'email', 'phone', 'body'], 'trim'],
            [['name', 'phone', 'email'], 'string', 'length' => [3, 60]], // длина должна быть в диапозоне от 3 до 60
            // максимальный размер файла 15 Мб (1024*1024*15)
            ['uploadFile', 'file'],
            ['conditions', 'trim'], //условия санаторно-курортного лечения
            ['consent', 'compare', 'compareValue' => 1, 'message' => 'Выствите чебокс, иначе форма не отправится!'], // 'Согласие на обработку персональных данных',
            ['email', 'email'],
            [['date_begin', 'date_end'], 'date', 'format' => 'y-m-d'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            '$date_begin' => 'Дата заезда',
            '$date_end' => 'Дата отъезда',
            'conditions' => 'Выберите условия санаторно-курортного лечения:',
            'uploadFile' => 'Прикрепите скан направления врача. (При наличии) ф 070-у (утв. приказом МЗ РФ от 15 декабря 2014 г. № 834н )',
            'body' => 'Ваше сообщение',
            'consent' => 'Согласие на обработку персональных данных',
            'verifyCode' => 'введите проверочный код:',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation

      public function contact($email)
      {
      if ($this->validate()) {
      Yii::$app->mailer->compose()
      ->setTo($email)
      ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
      ->setReplyTo([$this->email => $this->name])
      ->setSubject('Заказать звонок-бронь. Санаторий МИД')
      ->setTextBody($this->body)
      ->send();

      return true;
      }
      return false;
      }
     */
}
