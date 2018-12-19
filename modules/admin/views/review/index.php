<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ReviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reviews');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Review'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute' => 'img',
                'value' => function ($model) {
                    return Html::img('/uploads/' . $model->img, ['style' => 'max-width:100px']);

                },
                'format' => 'html'
            ],
            [
                'attribute' => 'text_ru',
                'format' => 'html'
            ],
//            'text_ru:ntext',
//            'text_uz:ntext',
//            'text_en:ntext',
//            'img',
            //'created_at',
            //'updated_at',

            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete}',
            ],
        ],
    ]); ?>
</div>
