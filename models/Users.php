<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $phone_service
 * @property string $skype
 * @property string $icq
 * @property string $jabber
 * @property integer $user_group_id
 *
 * @property Tasks[] $tasks
 * @property UserGroup $userGroup
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_group_id'], 'integer'],
            [['name', 'last_name', 'email', 'phone', 'skype', 'icq', 'jabber'], 'string', 'max' => 50],
            [['phone_service'], 'string', 'max' => 150],
            [['user_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserGroup::className(), 'targetAttribute' => ['user_group_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'e-mail',
            'phone' => 'Телефон',
            'phone_service' => 'Сервисы привязанные к телефону',
            'skype' => 'Skype',
            'icq' => 'Icq',
            'jabber' => 'Jabber',
            'user_group_id' => 'ID группы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['customizer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserGroup()
    {
        return $this->hasOne(UserGroup::className(), ['id' => 'user_group_id']);
    }


}
