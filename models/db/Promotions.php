<?php

namespace app\models\db;

use Yii;
use app\models\ImageUpload;

/**
 * This is the model class for table "promotions".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_text
 * @property string|null $detailed_text
 * @property string|null $imagePath
 * @property string|null $dateStart
 * @property string|null $dateEnd
 * @property int|null $hide
 * @property int|null $archive
 */
class Promotions extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'promotions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['short_text', 'detailed_text'], 'string'],
            [['dateStart', 'dateEnd'], 'safe'],
            [['hide', 'archive'], 'integer'],
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
            'detailed_text' => 'текст предложения',
            'imagePath' => 'картинка',
            'dateStart' => 'дата начала',
            'dateEnd' => 'дата окончания',
            'hide' => 'скрыть',
            'archive' => 'архив',
        ];
    }

    public function getImage() {

        return ($this->imagePath) ? '@web/uploads/promotions/' . $this->imagePath : '@web/images/noImage.jpg';
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

    public function getArchive() {

        return ($this->archive) ? 'да' : '';
    }

    public function deleteImage() {

        $imageUploadModel = new ImageUpload();

        $imageUploadModel->pathFiles = 'uploads/promotions/';
        $imageUploadModel->deleteCurrentImage($this->imagePath);
    }

    public function beforeDelete() {

        $this->deleteImage();
        return parent::beforeDelete();
    }

}
