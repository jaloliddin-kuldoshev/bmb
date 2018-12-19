<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\About */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Abouts'), 'url' => ['view', 'id' => 2]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <!--        --><? //= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
        //            'class' => 'btn btn-danger',
        //            'data' => [
        //                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
        //                'method' => 'post',
        //            ],
        //        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'text_ru',
                'format' => 'html'
            ],
            [
                'attribute' => 'text_en',
                'format' => 'html'
            ],
            [
                'attribute' => 'text_uz',
                'format' => 'html'
            ],
            [
                'attribute' => 'banner',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->banner, ['style' => 'max-width:100px']);
                },
                'format' => 'html'
            ],
        ],
    ]) ?>

</div>
