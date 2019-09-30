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
 * @property string $authKey
 */
class Form extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
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
            [['username', 'email', 'password', 'ip'], 'required'],
            [['phonenum'], 'integer'],
            [['date'], 'safe'],
            [['username', 'password', 'ip'], 'string', 'max' => 20],
            [['email', 'authKey'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['authKey    '], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app','ID'),
            'username' => Yii::t('app','Username'),
            'phonenum' => Yii::t('app','Phonenum'),
            'email' => Yii::t('app','Email'),
            'passw' => Yii::t('app','Passw'),
            'date' => Yii::t('app','Date'),
            'ip' => Yii::t('app','Ip'),
            'authKey' => Yii::t('app','Auth Key'),
        ];
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function getId()
    {
       return $this->ID;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new \yii\base\NotSupportedException();
    }

    public static function findByUsername($username){
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}
