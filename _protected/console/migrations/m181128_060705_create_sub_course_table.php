<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sub_course`.
 * Has foreign keys to the tables:
 *
 * - `coursecatgories`
 */
class m181128_060705_create_sub_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sub_course', [
            'id' => $this->primaryKey(),
            'coursecatgories_id' => $this->integer()->notNull(),
            'name' => $this->string(255),
        ]);

        // creates index for column `coursecatgories_id`
        $this->createIndex(
            'idx-sub_course-coursecatgories_id',
            'sub_course',
            'coursecatgories_id'
        );

        // add foreign key for table `coursecatgories`
        $this->addForeignKey(
            'fk-sub_course-coursecatgories_id',
            'sub_course',
            'coursecatgories_id',
            'coursecatgories',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `coursecatgories`
        $this->dropForeignKey(
            'fk-sub_course-coursecatgories_id',
            'sub_course'
        );

        // drops index for column `coursecatgories_id`
        $this->dropIndex(
            'idx-sub_course-coursecatgories_id',
            'sub_course'
        );

        $this->dropTable('sub_course');
    }
}
