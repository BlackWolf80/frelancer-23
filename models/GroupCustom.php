<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_custom".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Tasks[] $tasks
 */
class GroupCustom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group_custom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя заказчика',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Tasks::className(), ['group_custom_id' => 'id']);
    }
}
