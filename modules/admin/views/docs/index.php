<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\DocsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Docs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Docs'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title_ru',
//            'title_uz',
//            'title_en',
//            'text_ru:ntext',
            //'text_en:ntext',
            //'text_uz:ntext',
            'file',
            'type',
            [
                'attribute' => 'type',
                'value' => function ($model) {
                    if ($model->type == 1) {
                        return "Documaent";
                    } else {
                        return "Legal Base";
                    }
                }
            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
