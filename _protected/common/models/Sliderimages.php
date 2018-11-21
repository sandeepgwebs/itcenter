<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sliderimages".
 *
 * @property int $id
 * @property int $slider_id
 * @property string $title
 * @property string $description
 * @property string $images
 *
 * @property Slider $slider
 */
class Sliderimages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sliderimages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','description'], 'required'],
            [['slider_id'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['slider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Slider::className(), 'targetAttribute' => ['slider_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slider_id' => 'Slider ID',
            'title' => 'Title',
            'description' => 'Description',
            'images' => 'Images',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlider()
    {
        return $this->hasOne(Slider::className(), ['id' => 'slider_id']);
    }
}
