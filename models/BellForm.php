<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class BellForm extends Model {

    public $name;
    public $phone;
    public $body;
    public $consent;  // согласие на обработку данных 
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules() {
        return [

            [['name', 'phone', 'consent'], 'required'],
            [['name', 'phone', 'body'], 'trim'],
            [['name', 'phone'], 'string', 'length' => [3, 60]], // длина должна быть в диапозоне от 3 до 60
            ['consent', 'compare', 'compareValue' => 1, 'message' => 'Выствите чебокс, иначе форма не отправится!'], // 'Согласие на обработку персональных данных',
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'phone' => 'Телефон',
            'body' => 'Ваше сообщение',
            'consent' => 'Согласие на обработку персональных данных',
            'verifyCode' => 'введите проверочный код:',
        ];
    }

}
