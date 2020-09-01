<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dzhakuzi}}`.
 */
class m200517_072510_create_dzhakuzi_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%dzhakuzi}}', [
            'id' => $this->primaryKey(),
            'description1' => $this->string(), // описание 1 
            'description2' => $this->string(), // описание 2
            'description3' => $this->string(), // описание 3
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет  
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%dzhakuzi}}');
    }

}
