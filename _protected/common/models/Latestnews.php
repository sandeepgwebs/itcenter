<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "latestnews".
 *
 * @property int $id
 * @property string $title
 * @property string $adminname
 * @property string $date
 * @property string $discription
 * @property string $images
 */
class Latestnews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'latestnews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'adminname', 'discription'],'required'],
            [['date'], 'safe'],
            [['title', 'adminname', 'discription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'adminname' => 'Adminname',
            'date' => 'Date',
            'discription' => 'Discription',
            'images' => 'Images',
        ];
    }
}
