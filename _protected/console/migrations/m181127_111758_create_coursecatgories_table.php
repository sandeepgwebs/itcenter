<?php

use yii\db\Migration;

/**
 * Handles the creation of table `coursecatgories`.
 */
class m181127_111758_create_coursecatgories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('coursecatgories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('coursecatgories');
    }
}
