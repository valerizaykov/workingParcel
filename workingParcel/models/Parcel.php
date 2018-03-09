<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 */
class Parcel extends ActiveRecord 
{
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parcel';
    }

    /**
     * @inheritdoc
     */
    /*public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
		
    }*/

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
		    [['parcel_name'], 'required'],
			[['culture'], 'required'],
			[['area'], 'required'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByName($name)
    {
        return static::findOne(['name' => $name]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
   
    /*public function getAllUsers()
    {
        $user = User2::find()->all();
        return $user;
    }
	public function getPost()
    {
        return $this->hasOne(Post::className(), ['user_id' => 'id']);
    }*/
}
