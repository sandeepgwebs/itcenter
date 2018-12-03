<?php
namespace common\models;
use yii;


class Selectcourse extends yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'usercourse';
    }

    public function rules()
    {
        return[
            [['name','email','coursename','message'],'required'],
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
            'coursename' => 'Coursename',
            'message' => 'Message',
        ];
    }
}
?>