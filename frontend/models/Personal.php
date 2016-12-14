<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $professions
 */
class Personal extends  ObjectModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    public static function getProfessionsList(){
        return array('developer' => 'Разработчик', 'booker' => 'Бухгалтер', 'manager' => 'Менеджер');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'phone', 'professions'], 'required'],
            [['professions'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Фамилия',
            'last_name' => 'Имя',
            'phone' => 'Телефон',
            'professions' => 'Должность',
        ];
    }
}
