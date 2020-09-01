<?php

namespace app\models\db;

use Yii;
use app\models\ImageUpload;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_text
 * @property string|null $detailed_text
 * @property string|null $imagePath
 * @property string|null $date
 * @property int|null $hide
 */
class News extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['short_text', 'detailed_text'], 'string'],
            [['date'], 'safe'],
            [['hide'], 'integer'],
            [['title', 'imagePath'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'заголовок',
            'short_text' => 'краткое описание',
            'detailed_text' => 'основной текст новости',
            'imagePath' => 'картинка',
            'date' => 'дата',
            'hide' => 'скрыть',
        ];
    }

    public function getImage() {

        return ($this->imagePath) ? '@web/uploads/news/' . $this->imagePath : '@web/images/noImage.jpg';
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

    public function deleteImage() {

        $imageUploadModel = new ImageUpload();

        $imageUploadModel->pathFiles = 'uploads/news/';
        $imageUploadModel->deleteCurrentImage($this->imagePath);
    }

    public function beforeDelete() {

        $this->deleteImage();
        return parent::beforeDelete();
    }

}
