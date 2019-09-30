<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property int $id
 * @property string $username
 * @property int $phonenum
 * @property string $email
 * @property string $password
 * @property string $date
 * @property string $ip
 */
class FormSuccess extends \yii\db\ActiveRecord
{

    public $email2;
    public $password2;
    public $aszf;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii2advanced';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'email2', 'password', 'password2', 'aszf'], 'required'],
            [['phonenum'], 'integer'],
            ['phonenum', 'match', 'pattern' => '/([0]{1}[6]{1})[0-9]{2}[0-9]{7}/','message' => 'Not valid phone number format!'],
            [['date'], 'safe'],
            [ 'password', 'string', 'min' => 8],
            ['username','string','min' => 3, 'max' =>16],
            [['username'], 'unique'],
            ['email', 'email'],
            [['password2'], 'compare', 'compareAttribute' => 'password'],
            [['email2','password2','aszf'],'required'],
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
            'phonenum' => 'Phonenum',
            'email' => 'Email',
            'password' => 'Password',
            'email2' => 'Confirm Email',
            'password2' => 'Confirm Password',
            'aszf' => 'ASZF',
        ];
    }
}
