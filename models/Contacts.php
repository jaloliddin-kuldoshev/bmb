<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $address_ru
 * @property string $address_uz
 * @property string $address_en
 * @property string $phone
 * @property string $email
 * @property string $map
 * @property string $banner
 */
class Contacts extends \yii\db\ActiveRecord
{
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address_ru'], 'required'],
            [['map'], 'string'],
            [['address_ru', 'address_uz', 'address_en', 'phone', 'email', 'banner', 'fax', 'fb', 'tg', 'ins'], 'string', 'max' => 255],
            [['photo'], 'safe'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'photo',
                'pathAttribute' => 'banner',
                'baseUrlAttribute' => false,
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'address_en' => Yii::t('app', 'Address En'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'map' => Yii::t('app', 'Map'),
            'banner' => Yii::t('app', 'Banner'),
        ];
    }

    public function getAddress()
    {
        return $this->{'address_' . Yii::$app->language};
    }
}
