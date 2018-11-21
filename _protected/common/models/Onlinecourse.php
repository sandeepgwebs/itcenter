<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "onlinecourse".
 *
 * @property int $id
 * @property string $name
 * @property string $teacher
 * @property string $description
 * @property string $rate
 * @property string $images
 */
class Onlinecourse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'onlinecourse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'teacher', 'description', 'rate'], 'required'],
            [['name', 'teacher', 'description', 'rate'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'teacher' => 'Teacher',
            'description' => 'Description',
            'rate' => 'Rate',
            'images' => 'Images',
        ];
    }
}
