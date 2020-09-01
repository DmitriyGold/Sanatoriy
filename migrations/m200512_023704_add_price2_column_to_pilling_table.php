<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%pilling}}`.
 */
class m200512_023704_add_price2_column_to_pilling_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%pilling}}', 'price2', $this->DECIMAL(10));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%pilling}}', 'price2');
    }
}
