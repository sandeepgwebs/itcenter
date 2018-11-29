<?php
namespace common\models;

use yii\base\Model;
use Yii;
/**
 * ContactForm is the model behind the contact form.
 */
class SearchForm extends Model
{
    public $category;
    public $subcat;
    public $skill;
    /**
     * Returns the validation rules for attributes.
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category','subcat','skill'], 'safe'],
        ];
    }
    /**
     * Returns the attribute labels.
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'search'=> Yii::t('app', 'Search...'),
        ];
    }
}