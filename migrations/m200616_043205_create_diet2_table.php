<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diet2}}`.
 */
class m200616_043205_create_diet2_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%diet2}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(), // Номер диеты
            'name_type' => $this->string(), // Виды кулинарной обработки   
            'description' => $this->string(510), // Запрещаемые продукты, блюда      
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%diet2}}');
    }
}
