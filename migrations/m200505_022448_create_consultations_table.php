<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%consultations}}`.
 */
class m200505_022448_create_consultations_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%consultations}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(), // название консультации
            'price1' => $this->DECIMAL(10), // прайсовая соимость 1         
            'price2' => $this->DECIMAL(10), // прайсовая соимость 2
            'hide' => $this->integer(1)->defaultValue(0), // отображать или нет, 1 - скрыть, 0 - нет            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%consultations}}');
    }

}
