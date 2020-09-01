<?php

namespace app\models\db;

use Yii;
use app\models\ImageUpload;
use app\models\FileUpload;

/**
 * This is the model class for table "vouchers".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_text
 * @property string|null $subtitle_1
 * @property string|null $detailed_text1
 * @property string|null $subtitle_2
 * @property string|null $detailed_text2
 * @property string|null $subtitle_3
 * @property string|null $detailed_text3
 * @property string|null $imagePath
 * @property string|null $file1Path
 * @property string|null $file2Path
 * @property string|null $file3Path
 * @property string|null $date
 * @property int|null $hide
 */
class Vouchers extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'vouchers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['short_text', 'detailed_text1', 'detailed_text2', 'detailed_text3'], 'string'],
            [['date'], 'safe'],
            [['hide'], 'integer'],
            [['title', 'subtitle_1', 'subtitle_2', 'subtitle_3', 'imagePath', 'file1Path', 'file2Path', 'file3Path', 'file1Name', 'file2Name', 'file3Name'],
                'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'путевка',
            'short_text' => 'краткое описание',
            'subtitle_1' => 'подзаголовок 1',
            'detailed_text1' => 'текст 1',
            'subtitle_2' => 'подзаголовок 2',
            'detailed_text2' => 'текст 2',
            'subtitle_3' => 'подзаголовок 3',
            'detailed_text3' => 'текст 3',
            'imagePath' => 'картинка',
            'file1Path' => 'документ 1',
            'file1Name' => 'документ 1',
            'file2Path' => 'документ 2',
            'file2Name' => 'документ 2',
            'file3Path' => 'документ 3',
            'file3Name' => 'документ 3',
            'date' => 'дата',
            'hide' => 'скрыть',
        ];
    }

    public function getImage() {

        return ($this->imagePath) ? '@web/uploads/vouchers/' . $this->imagePath : '@web/images/noImage.jpg';
    }

    public function getHide() {

        return ($this->hide) ? 'да' : '';
    }

    public function deleteImage() {

        $imageUploadModel = new ImageUpload();

        $imageUploadModel->pathFiles = 'uploads/vouchers/';
        $imageUploadModel->deleteCurrentImage($this->imagePath);
    }

    public function deleteFile() {

        $UploadModel = new FileUpload();

        $UploadModel->pathFiles = 'uploads/vouchers/';
        $UploadModel->deleteCurrentFile($this->file1Path);
        $UploadModel->deleteCurrentFile($this->file2Path);
        $UploadModel->deleteCurrentFile($this->file3Path);
    }

    public function beforeDelete() {

        $this->deleteImage();
        $this->deleteFile();
        return parent::beforeDelete();
    }

}
