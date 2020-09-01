<?php

namespace app\models;

use yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends model {

    public $image;
    public $pathFiles;

    public function rules() {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels() {
        return [
            'image' => 'картинка в формате png, jpg:',
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage) {

         $this->deleteCurrentImage($currentImage);

        $this->image = $file;

        if ($this->validate()) {

          return  $this->saveImage(); //сохранили на сервере и возвратили название файла
        }
    }

    private function getFolder() {
        return Yii::getAlias("$this->pathFiles");
    }

    private function generateFilename() {
        return strtolower(md5(uniqid($this->image->baseName)) . '.' . $this->image->extension);
    }

    public function deleteCurrentImage($currentImage) {

        if (!empty($currentImage)) {
            if ($this->fileExists($currentImage)) {  // если существует удаляем старую картинку по названию картинки в БД\
                unlink($this->getFolder() . $currentImage);
            }
        }
    }

    public function fileExists($currentImage) {
        return file_exists($this->getFolder() . $currentImage);
    }

    public function saveImage() {
        $filename = $this->generateFilename(); // создаем уникальное имя

        $this->image->saveAs($this->getFolder() . $filename); // сохраняем картинку на сервере
        
        return $filename;
    }   

}
