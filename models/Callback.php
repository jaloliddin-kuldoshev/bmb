<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comp
 * @property string $phone
 * @property string $mes
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mes'], 'required'],
            [['mes'], 'string'],
            [['name', 'email', 'comp', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'comp' => Yii::t('app', 'Comp'),
            'phone' => Yii::t('app', 'Phone'),
            'mes' => Yii::t('app', 'Mes'),
        ];
    }
}
