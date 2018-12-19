<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "docs".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $text_ru
 * @property string $text_en
 * @property string $text_uz
 * @property string $file
 * @property int $type
 * @property int $created_at
 * @property int $updated_at
 */
class Docs extends \yii\db\ActiveRecord
{
    public $photo;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'text_ru', 'type'], 'required'],
            [['text_ru', 'text_en', 'text_uz'], 'string'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'file'], 'string', 'max' => 255],
            [['photo', 'banner'], 'safe'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'photo',
                'pathAttribute' => 'file',
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
            'text_en' => Yii::t('app', 'Text En'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'file' => Yii::t('app', 'File'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
