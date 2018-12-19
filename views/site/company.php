<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 12.12.2018
 * Time: 17:55
 */
$this->title = $model->{'title_' . Yii::$app->language};
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $model->banner ?>)">
    <h3><?= $model->{'title_' . Yii::$app->language} ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= $model->{'title_' . Yii::$app->language} ?></li>
    </ul>
</div>
<!--start project block-->
<section class="asu_bmb_body">
    <div class="container-fluid">
        <div class="row">

<!--            <div class="col-lg-6 col-md-12 asubody">-->
<!--                <div class="asu_body_img">-->
<!---->
<!--                </div>-->
<!--            </div>-->


            <div class="col-lg-12 col-md-12 asubody" style="padding:70px 0;">
                <div class="asu_body_text des-proj-desc">
                    <img src="/uploads/<?= $model->img ?>" alt="" style="">
                    <h4><?= $model->{'title_' . Yii::$app->language} ?></h4>
                    <?= $model->{'text_' . Yii::$app->language} ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--gallery-->
<section class="des-bmb-gal container-fluid">
    <div class="row des-gal-box">
        <?php foreach ($model->compImgs as $item): ?>
            <div class="col-md-3">
                <a href="/uploads/<?= $item->path ?>" data-fancybox="gallery" class="fancimg">
                    <img src="/uploads/<?= $item->path ?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--gallery-->

<section class="container">
    <div class="row">
        <div class="col-12 text-center"><h4
                    class="des-bmb-pr-ttl"><?= Yii::t('app', 'Команда') ?>  <?= $model->{'title_' . Yii::$app->language} ?></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 des-grp-team-wrap">
            <?php foreach ($model->workers as $item): ?>
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


    <!--    <div class="row des-inf-bmb">-->
    <!--        <div class="col-12"><p><span class="link-col">--><? //= Yii::t('app', 'Телефон') ?>
    <!--                    :</span><span> --><? //= $model->phone ?><!--</span></p></div>-->
    <!--        <div class="col-12">-->
    <!--            <p><span class="link-col">--><? //= Yii::t('app', 'Адрес') ?>
    <!--                    :</span><span> --><? //= $model->{'address_' . Yii::$app->language} ?><!--</span>-->
    <!--            </p>-->
    <!--        </div>-->
    <!--    </div>-->
</section>
<!--end project block-->
