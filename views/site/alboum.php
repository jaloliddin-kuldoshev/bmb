<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 15:01
 */
$this->title = Yii::t('app', 'Фото');
?>
<!--start heading-oth-pge-->

<section class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Фото') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Фото') ?></li>
    </ul>
</section>

<!--end-heading-oth-page-->

<!--start heading gallery-->
<section class="des-foto-galery-wrap container">
    <div class="bmb_branch_items">
        <?php foreach ($model as $item): ?>
            <div class="bmb_branch_item">
                <div class="bmb_branch_item_img" style="background-image: url(/uploads/<?= $item->img ?>)">
                    <div class="bmb_branch_item_hover">
                        <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                        <a href="<?= \yii\helpers\Url::to(['site/one-alboum', 'id' => $item->id]) ?>"><?= Yii::t('app', 'Перейти') ?></a>
                    </div>
                    <div class="bmb_branch_item_bottom_2">
                        <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="bd-example">
        <nav aria-label="Page navigation example">
            <?= \yii\widgets\LinkPager::widget([
                'pagination' => $pages,
                'options' => ['class' => 'pagination'],
                //Current Active option value
                'activePageCssClass' => 'p-active',
                //Max count of allowed options
                'maxButtonCount' => 8,

                // Css for each options. Links
                'linkOptions' => ['class' => ''],
                'disabledPageCssClass' => 'disabled',

                // Customzing CSS class for navigating link
                'prevPageCssClass' => 'page-item',
                'nextPageCssClass' => 'page-item',
                'firstPageCssClass' => 'page-item',
                'lastPageCssClass' => 'page-item',
            ]) ?>
        </nav>
    </div>
    <style>
        .bd-example {
            margin-top: 50px;
        }

        .bd-example nav .pagination span {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }

        .bd-example nav .pagination a {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
    </style>

</section>
<!--end heading gallery-->