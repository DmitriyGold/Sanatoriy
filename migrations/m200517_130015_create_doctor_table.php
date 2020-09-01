<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%doctor}}`.
 */
class m200517_130015_create_doctor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%doctor}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string()->notNull(), // ФИО врача 
            'image' => $this->string(), // названия файла картинки
            'description1' => $this->string(), // должность
            'description2' => $this->string(), // описание, сертификаты
            
            'schedule' => $this->string(), // график работы                    
            'sort' => $this->integer(), // сортировка главврач 1, врачи 2, младший мед персонал 3, прочее 4
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет                 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%doctor}}');
    }
}
