<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%physiotherapy}}`.
 */
class m200510_045439_create_physiotherapy_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%physiotherapy}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // название физиотерапии
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%physiotherapy}}');
    }
}
