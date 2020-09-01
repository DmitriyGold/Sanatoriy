<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sauna}}`.
 */
class m200517_063839_create_sauna_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sauna}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название 
            'description1' => $this->string(), // описание 1 
            'description2' => $this->string(), // описание 2
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1                     
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет             
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sauna}}');
    }
}
