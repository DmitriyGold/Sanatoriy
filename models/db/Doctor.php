<?php

namespace app\models\db;

use Yii;
use app\models\ImageUpload;

/**
 * This is the model class for table "doctor".
 *
 * @property int $id
 * @property string $fio
 * @property string|null $image
 * @property string|null $description1
 * @property string|null $description2
 * @property string|null $schedule
 * @property int|null $sort
 * @property int|null $hide
 */
class Doctor extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['fio'], 'required'],
            [['sort', 'hide'], 'integer'],
            [['fio', 'image', 'description1', 'description2', 'schedule'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'image' => 'фото',
            'description1' => 'должность',
            'description2' => 'описание',
            'schedule' => 'график работы',
            'sort' => 'сортировка',
            'hide' => 'скрыть',
        ];
    }

    public function getImage() {

        return ($this->image) ? '@web/uploads/doctors/' . $this->image : '@web/images/noImage.jpg';
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

    public function deleteImage() {

        $imageUploadModel = new ImageUpload();

        $imageUploadModel->pathFiles = 'uploads/doctors/';
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete() {

        $this->deleteImage();
        return parent::beforeDelete();
    }

}
