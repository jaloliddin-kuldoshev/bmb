<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_en
 * @property string $phone
 * @property string $address_ru
 * @property string $address_en
 * @property string $address_uz
 * @property int $type
 * @property string $banner
 * @property int $created_at
 * @property int $updated_at
 *
 * @property CompImg[] $compImgs
 * @property Workers[] $workers
 */
class Company extends \yii\db\ActiveRecord
{
    public $photo;
    public $images;
    public $banners;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru'], 'required'],
            [['text_ru', 'text_uz', 'text_en'], 'string'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'phone', 'address_ru', 'address_en', 'address_uz', 'banner', 'img'], 'string', 'max' => 255],
            [['photo', 'images', 'banners'], 'safe'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'photo',
                'pathAttribute' => 'img',
                'baseUrlAttribute' => false,
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'banners',
                'pathAttribute' => 'banner',
                'baseUrlAttribute' => false,
            ],
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'images',
                'multiple' => true,
                'uploadRelation' => 'compImgs',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => false,
            ],
            [
                'class' => TimestampBehavior::className()
            ]

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'phone' => Yii::t('app', 'Phone'),
            'address_ru' => Yii::t('app', 'Address Ru'),
            'address_en' => Yii::t('app', 'Address En'),
            'address_uz' => Yii::t('app', 'Address Uz'),
            'type' => Yii::t('app', 'Type'),
            'banner' => Yii::t('app', 'Banner'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompImgs()
    {
        return $this->hasMany(CompImg::className(), ['company_id' => 'id']);
    }

    public function getCompImg()
    {
        return $this->hasOne(CompImg::className(), ['company_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Workers::className(), ['company_id' => 'id']);
    }
}
