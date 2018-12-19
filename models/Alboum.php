<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "alboum".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $img
 *
 * @property Photo[] $photos
 */
class Alboum extends \yii\db\ActiveRecord
{
    public $photo;
    public $attach;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alboum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru'], 'required'],
            [['title_ru', 'title_en', 'title_uz', 'img'], 'string', 'max' => 255],
            [['photo', 'attach'], 'safe'],
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
                'attribute' => 'attach',
                'multiple' => true,
                'uploadRelation' => 'photos',
                'pathAttribute' => 'img',
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
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'img' => Yii::t('app', 'Img'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['alboum_id' => 'id']);
    }
}
