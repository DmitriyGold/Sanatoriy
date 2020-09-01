<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%khammam}}`.
 */
class m200629_071557_add_path_column_to_khammam_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%khammam}}', 'path', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%khammam}}', 'path');
    }
}
