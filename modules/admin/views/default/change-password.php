<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\ChangePassword */
$this->title = Yii::t('rbac-admin', 'Change Password');
?>
<div class="unix-login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="login-content card">
                    <div class="login-form">
                        <h4><?= Html::encode($this->title) ?></h4>
                        <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
                        <?= $form->field($model, 'oldPassword')->passwordInput() ?>
                        <?= $form->field($model, 'newPassword')->passwordInput() ?>
                        <?= $form->field($model, 'retypePassword')->passwordInput() ?>
                        <div class="form-group">
                            <?= Html::submitButton(Yii::t('rbac-admin', 'Change'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>