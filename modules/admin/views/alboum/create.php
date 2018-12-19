<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alboum */

$this->title = Yii::t('app', 'Create Alboum');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alboums'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alboum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
