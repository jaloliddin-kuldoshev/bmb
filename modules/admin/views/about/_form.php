<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about1')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Main Page');
    ?>

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content ru'); ?>
    <?= $form->field($model, 'text_uz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content uz'); ?>
    <?= $form->field($model, 'text_en')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content en'); ?>

    <?= $form->field($model, 'photo')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Banner');
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
