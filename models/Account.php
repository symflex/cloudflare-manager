<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "account".
 *
 * @property int $id
 * @property string $email
 * @property string $api_key
 *
 * @property Zones[] $zones
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'api_key'], 'required'],
            [['email', 'api_key'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'api_key' => 'Api Key',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZones()
    {
        return $this->hasMany(Zones::className(), ['account_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return AccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountQuery(get_called_class());
    }

    public static function dropDown()
    {
        $dropdown = [];
        $accounts = static::find()->all();
        foreach ($accounts as $account) {
            $dropdown[$account->id] = $account->email;
        }
        return $dropdown;
    }
}
