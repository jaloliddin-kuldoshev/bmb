<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 14:46
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

<section class="asu_service_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="asu_service_text" >
                    <h4 class="des-news-box-ttl"><?= $model->{'title_' . Yii::$app->language} ?></h4>
                    <div class="des-news-img" style="float: left; margin-right: 30px; max-width: 585px"><img style="height: auto" src="/uploads/<?= $model->img ?>" alt=""></div>
                    <?= $model->{'text_' . Yii::$app->language} ?>
                </div>
            </div>
        </div>
    </div>
</section>
