<?php

namespace app\models;

use Yii;

class EntryForm extends \yii\db\ActiveRecord 
{
    public $username;
    public $email;
    public $email2;
    public $phonenum;
    public $password;
    public $password2;
    public $aszf;

    public static function tableName()
    {
        return 'success';
    }

    public function rules()
    {
        return [
            [['username', 'email', 'email2', 'password', 'password2', 'aszf'], 'required'],
            [['phonenum'], 'integer'],
            [['username', 'password'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['username'], 'unique'],
            ['email', 'email'],
            [['password2'], 'compare', 'compareAttribute' => 'password'],
            ['password', 'string', 'min' => 8, 'max' => 16, ],
            [['email2'], 'compare', 'compareAttribute' => 'email'],
            ['aszf','required', 'requiredValue' => 1, 'message' => 'You have to accept ASZF'],
            ['password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/','message'=> 'New password must contain at least one lower and upper case character and a digit.']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'phonenum' => 'Phonenumber',
            'email' => 'Email',
            'password' => 'Password',
            'email2' => 'Confirm Email',
            'password2' => 'Confirm Password',
            'aszf' => 'ASZF',
        ];
    }
}
