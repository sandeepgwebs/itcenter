<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m181117_094828_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('slider');
    }
}
