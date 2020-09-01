<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%info}}`.
 */
class m200616_134123_create_info_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%info}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100), // наименование
            'description' => $this->string(500), // наименование
            'image1' => $this->string(125), // путь к картинке 1
            'image2' => $this->string(125), // путь к картинке 2
            'type' => $this->integer(), // тип 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%info}}');
    }

}
