<?php

use yii\db\Migration;

/**
 * Handles the creation of table `onlinecourse`.
 * Has foreign keys to the tables:
 *
 * - `coursecatgories`
 * - `sub_course`
 * - `skilllavel`
 */
class m181128_081438_create_onlinecourse_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('onlinecourse', [
            'id' => $this->primaryKey(),
            'coursecatgories_id' => $this->integer()->notNull(),
            'sub_course_id' => $this->integer()->notNull(),
            'skilllavel_id' => $this->integer()->notNull(),
            'name' => $this->string(255),
            'description' => $this->string(255),
            'teacher' => $this->string(255),
            'Price' => $this->string(50),
            'image' => $this->string(100),
        ]);

        // creates index for column `coursecatgories_id`
        $this->createIndex(
            'idx-onlinecourse-coursecatgories_id',
            'onlinecourse',
            'coursecatgories_id'
        );

        // add foreign key for table `coursecatgories`
        $this->addForeignKey(
            'fk-onlinecourse-coursecatgories_id',
            'onlinecourse',
            'coursecatgories_id',
            'coursecatgories',
            'id',
            'CASCADE'
        );

        // creates index for column `sub_course_id`
        $this->createIndex(
            'idx-onlinecourse-sub_course_id',
            'onlinecourse',
            'sub_course_id'
        );

        // add foreign key for table `sub_course`
        $this->addForeignKey(
            'fk-onlinecourse-sub_course_id',
            'onlinecourse',
            'sub_course_id',
            'sub_course',
            'id',
            'CASCADE'
        );

        // creates index for column `skilllavel_id`
        $this->createIndex(
            'idx-onlinecourse-skilllavel_id',
            'onlinecourse',
            'skilllavel_id'
        );

        // add foreign key for table `skilllavel`
        $this->addForeignKey(
            'fk-onlinecourse-skilllavel_id',
            'onlinecourse',
            'skilllavel_id',
            'skilllavel',
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
            'fk-onlinecourse-coursecatgories_id',
            'onlinecourse'
        );

        // drops index for column `coursecatgories_id`
        $this->dropIndex(
            'idx-onlinecourse-coursecatgories_id',
            'onlinecourse'
        );

        // drops foreign key for table `sub_course`
        $this->dropForeignKey(
            'fk-onlinecourse-sub_course_id',
            'onlinecourse'
        );

        // drops index for column `sub_course_id`
        $this->dropIndex(
            'idx-onlinecourse-sub_course_id',
            'onlinecourse'
        );

        // drops foreign key for table `skilllavel`
        $this->dropForeignKey(
            'fk-onlinecourse-skilllavel_id',
            'onlinecourse'
        );

        // drops index for column `skilllavel_id`
        $this->dropIndex(
            'idx-onlinecourse-skilllavel_id',
            'onlinecourse'
        );

        $this->dropTable('onlinecourse');
    }
}
