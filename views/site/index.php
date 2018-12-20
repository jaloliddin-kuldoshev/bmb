<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app', 'Главная');
$about = \app\models\About::findOne(2);
?>
<!--start top slider-->
<section class="bmb_top_slider">
    <div class="bmb_top_slider_wrap">
        <?php foreach ($slider as $item): ?>
            <div class="bmb_top_slider_item" style="background-image: url(/uploads/<?= $item->img ?>)">
                <div class="container">
                    <div class="bmb_top_slider_text_wrapper">
                        <div class="bmb_top_slider_text_back">
                        </div>
                        <div class="bmb_top_slider_text">
                            <h2><?= $item->{'title_' . Yii::$app->language} ?></h2>
                            <p><?= substr(strip_tags($item->{'text_' . Yii::$app->language}), 0, 200) ?></p>
                            <a href="<?= $item->link ?>"><?= Yii::t('app', 'Перейти') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!--end top slider-->
<!--start about us bock-->
<section class="bmb_about">
    <div class="bmb_about_slider">
        <div class="bmb_about_slider_img">
            <div class="bmb_about_slider_img_one">
                <img src="/uploads/<?= $about->about ?>" alt="">
            </div>
        </div>
        <div class="bmb_about_slider_texts">
            <div class="bmb_about_slider_text">
                <h3><?= Yii::t('app', 'О Компании') ?></h3>
                <?= mb_substr($about->{'text_' . Yii::$app->language}, 0, 1450) ?>
                <div style="margin-top: 20px;"><a
                            style="display:inline-block;background-color: #274162; padding: 10px 20px; cursor: pointer; color: #fff; text-transform: uppercase;"
                            href="<?= \yii\helpers\Url::to(['site/about']) ?>"><?= Yii::t('app', 'Подробно') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end about us bock-->
<!--start branches block-->
<section class="bmb_branch">
    <div class="bmb_branch_items">
        <?php $k = 1;
        foreach ($comp as $item): ?>
            <div class="bmb_branch_item">
                <div class="bmb_branch_item_img" style="background-image: url(/uploads/<?= $item->img ?>)">
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
            } else {
                $k++;
            } endforeach; ?>
    </div>
</section>
<!--end branches block-->
<!--start about worker slider-->
<section class="container-fluid">
    <div class="row des-ab-wrkr">
        <div class="col-lg-5 des-ab-wrkr-sldr-txt-wrap">
            <div class="des-ab-wrkr-sldr-txt-con">

                <?php if (!empty($review)) {
                    foreach ($review as $item): ?>
                        <div class="des-ab-wrkr-sldr-txt">
                            <div class="des-ab-wrkr-sldr-txt-img">
                                <img src="/uploads/<?= $item->img ?>" alt="">
                            </div>
                            <div class="des-ab-wrkr-sldr-txt-des" style="text-align:left;">
                                <span><?= strip_tags($item->{'text_' . Yii::$app->language}) ?></span>
                            </div>
                        </div>
                    <?php endforeach;
                } ?>
            </div>
        </div>
        <div class="col-lg-7 no-padding des-ab-wrkr-sldr-img-con">
            <div class="des-ab-wrkr-sldr-img-wrap">
                <?php if (!empty($review)) {
                    foreach ($review as $item): ?>
                        <div class="des-ab-wrkr-sldr-img-elem"
                             style="background-image: url(/site/images/worker-foto.png)"></div>
                    <?php endforeach;
                } ?>
            </div>
        </div>
    </div>
</section>
<!--end about worker slider-->

<!--start staff block-->
<section class="bmb_staff">

</section>
<!--end staff block-->
<!--start news block-->
<section class="bmb_news">
    <div class="bmb_news_wrap">
        <?php foreach ($news as $key => $item): ?>
            <?php if ($key == 0 || $key == 1): ?>
                <div class="bmb_news_item">
                    <div class="bmb_news_item_img">
                        <img src="/uploads/<?= $item->img ?>" alt="">
                    </div>
                    <div class="bmb_news_item_text">
                        <span><?= date('d/m/Y', $item->created_at) ?>
                            / <?= ($item->type == 1) ? Yii::t('app', 'Новости') : Yii::t('app', 'Новости Компании') ?></span>
                        <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>">
                            <h4><?= $item->{'title_' . Yii::$app->language} ?></h4></a>
                        <p><?= substr(strip_tags($item->{'text_' . Yii::$app->language}), 0, 100) ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($key == 2 || $key == 3): ?>
                <div class="bmb_news_item">
                    <div class="bmb_news_item_text">
                        <span><?= date('d/m/Y', $item->created_at) ?>
                            / <?= ($item->type == 1) ? Yii::t('app', 'Новости') : Yii::t('app', 'Новости Компании') ?> </span>
                        <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>">
                            <h4><?= $item->{'title_' . Yii::$app->language} ?></h4></a>
                        <p><?= substr(strip_tags($item->{'text_' . Yii::$app->language}), 0, 100) ?></p>
                    </div>
                    <div class="bmb_news_item_img">
                        <img src="/uploads/<?= $item->img ?>" alt="">
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>
<!--end news block-->
