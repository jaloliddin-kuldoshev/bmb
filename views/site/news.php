<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 12:38
 */
$this->title = Yii::t('app', 'Новости');
?>
<!--start heading-oth-pge-->

<section class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Новости') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Новости') ?></li>
    </ul>
</section>

<!--end heading gallery-->

<!--news slider wrap-->
<section class="container">
    <div class="des-nws-slr-wrap">
        <div class="des-nws-sldr-con">
            <div class="des-nws-sldr">
                <?php foreach ($slider as $item): ?>
                    <img src="/uploads/<?= $item->img ?>" alt="">
                <?php endforeach; ?>
            </div>
        </div>

        <div class="des-nws-sldr-desc">
            <?php foreach ($slider as $item): ?>
                <div class="des-nws-sldr-desc-box">
                    <div class="des-nws-sldr-desc-dte"><span><?= date('d/m/Y', $item->created_at) ?></span>
                    </div>
                    <p class="des-nws-sldr-desc-ttl"><?= $item->{'title_' . Yii::$app->language} ?></p>
                    <p class="des-nws-sldr-desc-txt"><?= substr(strip_tags($item->{'text_' . Yii::$app->language}), 0, 255) ?></p>
                    <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>"
                       class="des-btn des-news-sldr-box-btn"><?= Yii::t('app', 'Перейти') ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--news slider wrap-->

<!--start news content-->
<section class="container">
    <div class="row des-news-box-wrap">
        <?php if (!empty((array)$model)): ?>
            <div class="col-12">
                <h3 class="des-news-ttl"><?= Yii::t('app', 'Новости') ?></h3>
            </div>
        <?php endif; ?>
        <?php foreach ($model as $item): ?>
            <?php if ($item->type == 1): ?>
                <div class="col-md-4">
                    <article class="des-news-box">
                        <div class="des-news-img"><img src="/uploads/<?= $item->img ?>" alt=""></div>
                        <span class="des-news-box-pth des-span"><?= date('d/m/Y', $item->created_at) ?>
                            / <?= Yii::t('app', 'Новости') ?></span>
                        <h4 class="des-news-box-ttl"><?= $item->{'title_' . Yii::$app->language} ?></h4>
                        <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>"
                           class="des-mre-btn des-news-box-mre"><?= Yii::t('app', 'Перейти') ?></a>
                    </article>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="row des-news-box-wrap">
        <?php if (!empty((array)$model2)): ?>
            <div class="col-12">
                <h3 class="des-news-ttl"><?= Yii::t('app', 'Новости Компании') ?></h3>
            </div>
        <?php endif; ?>
        <?php foreach ($model2 as $item): ?>
            <?php if ($item->type == 2): ?>
                <div class="col-md-4">
                    <article class="des-news-box">
                        <div class="des-news-img"><img src="/uploads/<?= $item->img ?>" alt=""></div>
                        <span class="des-news-box-pth des-span"><?= date('d/m/Y', $item->created_at) ?>
                            / <?= Yii::t('app', 'Новости Компании') ?></span>
                        <h4 class="des-news-box-ttl"><?= $item->{'title_' . Yii::$app->language} ?></h4>
                        <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>"
                           class="des-mre-btn des-news-box-mre"><?= Yii::t('app', 'Перейти') ?></a>
                    </article>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>

    <div class="row des-news-box-wrap">
        <?php if (!empty((array)$model3)): ?>
            <div class="col-12">
                <h3 class="des-news-ttl"><?= Yii::t('app', 'События') ?></h3>
            </div>
        <?php endif; ?>
        <?php foreach ($model3 as $item): ?>
            <?php if ($item->type == 3): ?>
                <div class="col-md-4">
                    <article class="des-news-box">
                        <div class="des-news-img"><img src="/uploads/<?= $item->img ?>" alt=""></div>
                        <span class="des-news-box-pth des-span"><?= date('d/m/Y', $item->created_at) ?>
                            / <?= Yii::t('app', 'События') ?></span>
                        <h4 class="des-news-box-ttl"><?= $item->{'title_' . Yii::$app->language} ?></h4>
                        <a href="<?= \yii\helpers\Url::to(['site/one-news', 'id' => $item->id]) ?>"
                           class="des-mre-btn des-news-box-mre"><?= Yii::t('app', 'Перейти') ?></a>
                    </article>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>


    </div>

</section>

<!--start news content-->
