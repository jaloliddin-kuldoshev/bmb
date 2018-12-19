<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alboum */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alboums'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="alboum-view">

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
                'attribute' => 'img',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->img, ['style' => 'max-width:100px']);
                },
                'format' => 'html'
            ],
            'title_ru',
            'title_en',
            'title_uz',
            [
                'attribute' => 'attach',
                'value' => function ($model) {
                    $img = '';
                    foreach ($model->photos as $item) {
                        $img .=  '<img src="/uploads/'.$item->img.'" width="100"> ';
                    }
                    return $img;
                },
                'format' => 'raw',
            ]


        ],
    ]) ?>

</div>
