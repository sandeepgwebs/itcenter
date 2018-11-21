<?php

use yii\db\Migration;

/**
 * Handles the creation of table `onlinecourse`.
 */
class m181119_063705_create_onlinecourse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('onlinecourse', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'teacher' => $this->string(255),
            'description' => $this->string(255),
            'rate' => $this->string(255),
            'images' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('onlinecourse');
    }
}
