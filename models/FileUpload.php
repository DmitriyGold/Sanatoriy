<?php

namespace app\models;

use yii;
use yii\base\Model;
use yii\web\UploadedFile;

class FileUpload extends model {

    public $myFile;
    public $pathFiles;

    public function rules() {
        return [
            [['myFile'], 'safe'],
            [['myFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, docx, doc, pptx, xlsx, xls'],
        ];
    }

    public function attributeLabels() {
        return [
            'myFile' => 'документ в формате pdf, docx, doc, pptx, xlsx, xls:',
        ];
    }

    public function uploadFile(UploadedFile $file, $currentFile) {

        $this->deleteCurrentFile($currentFile);

        $this->myFile = $file;

        if ($this->validate()) {

            return $this->saveFile(); //сохранили на сервере и возвратили название файла
        }
    }

    private function getFolder() {
        return Yii::getAlias("$this->pathFiles");
    }

    private function generateFilename() {
        return strtolower(md5(uniqid($this->myFile->baseName)) . '.' . $this->myFile->extension);
    }

    public function deleteCurrentFile($currentFile) {

        if (!empty($currentFile)) {
            if ($this->fileExists($currentFile)) {  // если существует файл на сервере то удаляем его по названию в БД\
                unlink($this->getFolder() . $currentFile);
            }
        }
    }

    public function fileExists($currentFile) {
        return file_exists($this->getFolder() . $currentFile);
    }

    public function saveFile() {
        $filename = $this->generateFilename(); // создаем уникальное имя

        $this->myFile->saveAs($this->getFolder() . $filename); // сохраняем файл на сервере

        return $filename;
    }

}
