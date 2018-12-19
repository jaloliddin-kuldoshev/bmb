<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('app', 'О Компании');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $model->banner ?>)">
    <h3><?= Yii::t('app', 'О Компании') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'О Компании') ?></li>
    </ul>
</div>

<section class="asu_bmb_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="asu_service_text">
                    <?= $model->{'text_' . Yii::$app->language} ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-12 text-center"><h4 class="des-bmb-pr-ttl"><?= Yii::t('app', 'Команда') ?>  BMB Trade Group</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 des-grp-team-wrap">
				<?php foreach($work as $item): ?>
                <div class="des-grp-team-box">
                    <div class="des-grp-team-box-img">
                        <img src="/uploads/<?= $item->img ?>" alt="">
                    </div>

                    <div class="des-grp-team-box-des">
                        <h5 class="des-grp-team-box-des-ttl"><?= $item->{'title_' . Yii::$app->language} ?></h5>
                        <p class="des-grp-team-box-des-key"><?= $item->{'position_' . Yii::$app->language} ?></p>
                    </div>
                </div>
				<?php endforeach; ?>
        </div>
    </div>
</section>
<!--start branches block-->
<section class="bmb_branch">
    <div class="bmb_branch_items">

        <?php $k = 1;
        foreach ($comp as $item): ?>
            <div class="bmb_branch_item">
                <div class="bmb_branch_item_img" style="background-image: url(/uploads/<?= $item->banner ?>)">
                    <div class="bmb_branch_item_hover">
                        <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                        <a href="<?= \yii\helpers\Url::to(['site/company', 'id' => $item->id]) ?>"><?= Yii::t('app', 'Перейти') ?></a>
                    </div>
                    <div class="bmb_branch_item_bottom_<?= $k ?>">
                        <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                    </div>
                </div>
            </div>
            <?php if ($k == 2) {
                $k = 1;
            }else{
            $k++; } endforeach; ?>

    </div>
</section>
<!--end branches block-->
