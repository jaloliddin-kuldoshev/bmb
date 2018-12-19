<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contacts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contacts'), 'url' => ['view', 'id' => $this->title]];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'address_ru',
            'address_uz',
            'address_en',
            'phone',
            'fax',
            'tg',
            'ins',
            'fb',
            'email:email',
            'map:ntext',
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
