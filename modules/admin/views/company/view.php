<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Company */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Companies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-view">

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
            'text_uz:ntext',
            'text_en:ntext',
            'phone',
            'address_ru',
            'address_en',
            'address_uz',
            'type',
            [
                'attribute' => 'banner',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->banner, ['style' => 'max-width:100px']);
                },
                'format' => 'html',
                'label' => 'Banner',
            ],
            [
                'attribute' => 'img',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->img, ['style' => 'max-width:100px']);
                },
                'format' => 'html',
                'label' => 'Main Img',
            ],
            [
                'attribute' => 'images',
                'value' => function ($model) {
                    $img = '';
                    foreach ($model->compImgs as $item) {
                        $img .=  '<img src="/uploads/'.$item->path.'" width="100"> ';
                    }
                    return $img;
                },
                'format' => 'raw',
            ],
            'created_at:date',
//            'updated_at',
        ],
    ]) ?>

</div>
