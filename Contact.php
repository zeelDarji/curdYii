<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 50],
            ['email', 'unique', 'on' => 'forms'],//If it is in forms page it check for unique email id
            ['email', 'unique', 'on' => 'success'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}