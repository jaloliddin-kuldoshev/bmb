<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $alboum_id
 * @property string $img
 *
 * @property Alboum $alboum
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alboum_id'], 'required'],
            [['alboum_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['alboum_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alboum::className(), 'targetAttribute' => ['alboum_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'alboum_id' => Yii::t('app', 'Alboum ID'),
            'img' => Yii::t('app', 'Img'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlboum()
    {
        return $this->hasOne(Alboum::className(), ['id' => 'alboum_id']);
    }
}
