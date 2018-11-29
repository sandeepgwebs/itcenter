<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sub_course".
 *
 * @property int $id
 * @property int $coursecatgories_id
 * @property string $name
 *
 * @property Coursecatgories $coursecatgories
 */
class Sub_course extends \yii\db\ActiveRecord
{
    public $skill;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['coursecatgories_id','name'], 'required'],
            [['coursecatgories_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['coursecatgories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Coursecatgories::className(), 'targetAttribute' => ['coursecatgories_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'coursecatgories_id' => 'Coursecatgories ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoursecatgories()
    {
        return $this->hasOne(Coursecatgories::className(), ['id' => 'coursecatgories_id']);
    }
}
