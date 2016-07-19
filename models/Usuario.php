<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $status
 * @property integer $auth
 * @property string $verification_code
 * @property string $avatar
 * @property string $name_temporal
 * @property string $fecha_registro
 *
 * @property AuthAssignment[] $authAssignments
 * @property AuthItem[] $itemNames
 */
class Usuario extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public $auth_key;
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'status'], 'required'],
            [['status', 'auth'], 'integer'],
            [['fecha_registro'], 'safe'],
            [['username', 'password'], 'string', 'max' => 100],
            [['verification_code'], 'string', 'max' => 250],
            [['avatar', 'name_temporal'], 'string', 'max' => 150],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'auth' => 'Auth',
            'verification_code' => 'Verification Code',
            'avatar' => 'Avatar',
            'name_temporal' => 'Name Temporal',
            'fecha_registro' => 'Fecha Registro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthAssignments()
    {
        return $this->hasMany(AuthAssignment::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemNames()
    {
        return $this->hasMany(AuthItem::className(), ['name' => 'item_name'])->viaTable('auth_assignment', ['user_id' => 'id']);
    }
    
    
public static function findIdentity($id)
    {      
        return static::findOne($id);
    }
    
    public function getId()
    {
        return $this->getPrimaryKey();
    }
        
    public static function findByUsername($username)
    {
       return static::find()->where('username=:username and status=1',[':username' => $username])->one();
    }
    
    public function validatePassword($password,$username)
    {
        $model=static::find()->where('username=:username and status=1',[':username' => $username])->one();
        if(Yii::$app->getSecurity()->validatePassword($password, $model->password))
        {
            return $model;
        }
        return false;
    }
    public function getUsername()
    {
        
        return $this->username;
    }
    
    
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
        if ($user['accessToken'] === $token) {
           return new static($user);
        }       
        return null;
    }
    
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
}
