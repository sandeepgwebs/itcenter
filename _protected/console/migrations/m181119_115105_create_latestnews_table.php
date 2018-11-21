<?php

use yii\db\Migration;

/**
 * Handles the creation of table `latestnews`.
 */
class m181119_115105_create_latestnews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('latestnews', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'adminname' => $this->string(255),
            'date' => $this->date(),
            'discription' => $this->string(255),
            'images' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('latestnews');
    }
}
