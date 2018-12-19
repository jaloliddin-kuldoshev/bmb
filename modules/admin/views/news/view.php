<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

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
            'title_ru',
            'title_uz',
            'title_en',
            'text_ru:ntext',
            'text_en:ntext',
            'text_uz:ntext',
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    if ($model->type == 1) {
                        return "Новости";
                    } else if ($model->type == 2) {
                        return "Новости компании";
                    } else {
                        return "События";
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
//            'status',
            'created_at:date',
//            'updated_at',
        ],
    ]) ?>

</div>
