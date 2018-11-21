<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contectform`.
 */
class m181120_110726_create_contectform_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contectform', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'email' => $this->string(255),
            'message' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contectform');
    }
}
