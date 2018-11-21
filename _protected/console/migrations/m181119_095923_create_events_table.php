<?php

use yii\db\Migration;

/**
 * Handles the creation of table `events`.
 */
class m181119_095923_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('events', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->string(255),
            'images' => $this->string(255),
            'date' => $this->date(),
            'time' => $this->time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('events');
    }
}
