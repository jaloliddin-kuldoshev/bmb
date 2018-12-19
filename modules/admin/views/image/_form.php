<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Image */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'photo')->widget(
        \trntv\filekit\widget\Upload::className(),
        [
            'url' => ['/admin/file-storage/upload'],
            'sortable' => true,
            'maxFileSize' => 10000000, // 10 MiB
        ])->label('Image');
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
