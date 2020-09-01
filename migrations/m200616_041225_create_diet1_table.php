<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diet1}}`.
 */
class m200616_041225_create_diet1_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%diet1}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // НАЗВАНИЕ Вариантов стандартных диет 
            'designation' => $this->string(), // ОБОЗНАЧЕНИЕ стандартных диет в документации пищеблока 
             'number' => $this->string(), // диеты НОМЕРНОЙ системы    
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%diet1}}');
    }

}
