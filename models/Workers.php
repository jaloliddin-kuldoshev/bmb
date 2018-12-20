<?php

namespace app\models;

use trntv\filekit\behaviors\UploadBehavior;
use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $id
 * @property int $company_id
 * @property string $img
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $position_ru
 * @property string $position_en
 * @property string $position_uz
 *
 * @property Company $company
 */
class Workers extends \yii\db\ActiveRecord
{
    public $photo;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru'], 'required'],
            [['company_id'], 'integer'],
            [['img', 'title_ru', 'title_en', 'title_uz', 'position_ru', 'position_en', 'position_uz'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'company_id' => Yii::t('app', 'Company ID'),
            'img' => Yii::t('app', 'Img'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'position_ru' => Yii::t('app', 'Position Ru'),
            'position_en' => Yii::t('app', 'Position En'),
            'position_uz' => Yii::t('app', 'Position Uz'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }
}
