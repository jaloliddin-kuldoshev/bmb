<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Workers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Workers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'company_id',
                'value' => function ($model) {
                    if ($model->company_id == null) {
                        return "О компании";
                    } else {
                        return $model->company->title_ru;
                    }
                }

            ],
            [
                'attribute' => 'img',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->img, ['style' => 'max-width:100px']);
                },
                'format' => 'html'
            ],
            'title_ru',
            'title_en',
            'title_uz',
            'position_ru',
            'position_en',
            'position_uz',
        ],
    ]) ?>

</div>
