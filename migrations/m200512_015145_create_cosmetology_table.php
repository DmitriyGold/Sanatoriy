<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cosmetology}}`.
 */
class m200512_015145_create_cosmetology_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%cosmetology}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(), // название 
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'price2' => $this->DECIMAL(10), // прайсовая соимость 2                     
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет              
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%cosmetology}}');
    }

}
