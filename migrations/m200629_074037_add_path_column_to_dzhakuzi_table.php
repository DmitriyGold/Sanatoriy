<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%dzhakuzi}}`.
 */
class m200629_074037_add_path_column_to_dzhakuzi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%dzhakuzi}}', 'path', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%dzhakuzi}}', 'path');
    }
}
