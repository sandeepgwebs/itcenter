<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "onlinecourse".
 *
 * @property int $id
 * @property int $coursecatgories_id
 * @property int $sub_course_id
 * @property int $skilllavel_id
 * @property string $name
 * @property string $description
 * @property string $teacher
 * @property string $Price
 * @property string $image
 *
 * @property Coursecatgories $coursecatgories
 * @property Skilllavel $skilllavel
 * @property SubCourse $subCourse
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
            [['coursecatgories_id', 'sub_course_id', 'skilllavel_id'], 'required'],
            [['coursecatgories_id', 'sub_course_id', 'skilllavel_id'], 'integer'],
            [['name', 'description', 'teacher'], 'string', 'max' => 255],
            [['name', 'description', 'teacher'], 'required',],
            [['Price'], 'string', 'max' => 50],

            [['coursecatgories_id'], 'exist', 'skipOnError' => true, 'targetClass' => Coursecatgories::className(), 'targetAttribute' => ['coursecatgories_id' => 'id']],
            [['skilllavel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Skilllavel::className(), 'targetAttribute' => ['skilllavel_id' => 'id']],
            [['sub_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubCourse::className(), 'targetAttribute' => ['sub_course_id' => 'id']],
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
            'sub_course_id' => 'Sub Course ID',
            'skilllavel_id' => 'Skilllavel ID',
            'name' => 'Name',
            'description' => 'Description',
            'teacher' => 'Teacher',
            'Price' => 'Price',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoursecatgories()
    {
        return $this->hasOne(Coursecatgories::className(), ['id' => 'coursecatgories_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkilllavel()
    {
        return $this->hasOne(Skilllavel::className(), ['id' => 'skilllavel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubCourse()
    {
        return $this->hasOne(SubCourse::className(), ['id' => 'sub_course_id']);
    }


}
