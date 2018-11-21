<?php
namespace common\models;
use yii;


class Customform extends yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'contectform';
    }

    public function rules()
    {
        return[
            [['name','email','message'],'required'],
            ['email','email'],
            [['email','email'],'string','max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }
}
?>