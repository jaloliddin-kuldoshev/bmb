<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $position_ru
 * @property string $position_en
 * @property string $position_uz
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_en
 * @property string $img
 * @property int $created_at
 * @property int $updated_at
 */
class Team extends \yii\db\ActiveRecord
{
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru'], 'required'],
            [['text_ru', 'text_uz', 'text_en'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'position_ru', 'position_en', 'position_uz', 'img'], 'string', 'max' => 255],
            [['photo'], 'safe'],
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
            'position_ru' => Yii::t('app', 'Position Ru'),
            'position_en' => Yii::t('app', 'Position En'),
            'position_uz' => Yii::t('app', 'Position Uz'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'img' => Yii::t('app', 'Img'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
