<?php

use yii\db\Migration;

/**
 * Handles the creation of table `usercourse`.
 */
class m181120_114330_create_usercourse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usercourse', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'coursename' => $this->string(255),
            'message' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usercourse');
    }
}
