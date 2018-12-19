<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'type')->dropDownList([
        '1' => 'Дочерняя компания',
        '2' => 'Совместная компания'
    ]) ?>

    <?= $form->field($model, 'banners')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Banner');
    ?>

    <?= $form->field($model, 'photo')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Img');
    ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content ru'); ?>
    <?= $form->field($model, 'text_uz')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content uz'); ?>
    <?= $form->field($model, 'text_en')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', ['height' => 300]),
    ])->label('Content en'); ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_uz')->textInput(['maxlength' => true]) ?>


    <?php echo $form->field($model, 'images')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
            'maxNumberOfFiles' => 16
        ])->label('Photos');
    ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
