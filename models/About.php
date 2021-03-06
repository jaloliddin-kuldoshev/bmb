<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $text_ru
 * @property string $text_en
 * @property string $text_uz
 * @property string $banner
 */
class About extends \yii\db\ActiveRecord
{
    public $photo;
    public $about1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_ru', 'text_en', 'text_uz'], 'string'],
            [['banner', 'about'], 'string', 'max' => 255],
            [['photo', 'about1'], 'safe'],
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
            [
                'class' => UploadBehavior::className(),
                'attribute' => 'about1',
                'pathAttribute' => 'about',
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
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'banner' => Yii::t('app', 'Banner'),
        ];
    }
}
