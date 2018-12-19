<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */
/* @var $form yii\widgets\ActiveForm */
$item = \yii\helpers\ArrayHelper::map(\app\models\Company::find()->all(), 'id', 'title_ru');
$item[] = 'О нас';
?>

<div class="workers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->dropDownList($item)	?>

    <?= $form->field($model, 'photo')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Image');
    ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_uz')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
