<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tasks".
 *
 * @property integer $id
 * @property string $title
 * @property string $specification
 * @property string $date_placement
 * @property string $time_execution
 * @property integer $customizer_id
 * @property integer $group_custom_id
 * @property integer $payment_method_id
 *
 * @property GroupCustom $groupCustom
 * @property PaymentMethod $paymentMethod
 * @property Users $customizer
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'specification'], 'required'],
            [['date_placement'], 'safe'],
            [['customizer_id', 'group_custom_id', 'payment_method_id'], 'integer'],
            [['title', 'time_execution'], 'string', 'max' => 50],
            [['specification'], 'string', 'max' => 250],
            [['group_custom_id'], 'exist', 'skipOnError' => true, 'targetClass' => GroupCustom::className(), 'targetAttribute' => ['group_custom_id' => 'id']],
            [['payment_method_id'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentMethod::className(), 'targetAttribute' => ['payment_method_id' => 'id']],
            [['customizer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['customizer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'specification' => 'Описание',
            'date_placement' => 'Дата заказа',
            'time_execution' => 'Срок исполнения',
            'customizer_id' => 'ID заказчика',
            'group_custom_id' => 'ID группы заказа',
            'payment_method_id' => 'ID типа оплаты',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupCustom()
    {
        return $this->hasOne(GroupCustom::className(), ['id' => 'group_custom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentMethod()
    {
        return $this->hasOne(PaymentMethod::className(), ['id' => 'payment_method_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomizer()
    {
        return $this->hasOne(Users::className(), ['id' => 'customizer_id']);
    }
}
