<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Skilllavel`.
 */
class m181127_113216_create_Skilllavel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Skilllavel', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Skilllavel');
    }
}
