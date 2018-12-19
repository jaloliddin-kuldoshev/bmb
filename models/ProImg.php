<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proImg".
 *
 * @property int $id
 * @property int $projects_id
 * @property string $path
 *
 * @property Projects $projects
 */
class ProImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proImg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projects_id'], 'required'],
            [['projects_id'], 'integer'],
            [['path'], 'string', 'max' => 255],
            [['projects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::className(), 'targetAttribute' => ['projects_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'projects_id' => Yii::t('app', 'Projects ID'),
            'path' => Yii::t('app', 'Path'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasOne(Projects::className(), ['id' => 'projects_id']);
    }
}
