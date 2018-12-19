<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 15:52
 */
$this->title = Yii::t('app', 'Фото');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Сервисы') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Сервисы') ?></li>
    </ul>
</div>

<section class="asu_service_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="margin-top: 30px;" ><?= $model->{'title_' . Yii::$app->language} ?></h3>
                <div class="asu_service_text" style="display: flex; flex-wrap: wrap">
                    <?php foreach ($model->photos as $item): ?>
                        <div class="col-md-3" style="margin-bottom: 30px;">
                            <a href="/uploads/<?= $item->img ?>" data-fancybox="gallery" class="fancimg">
                                <img style="min-width: 247px;" src="/uploads/<?= $item->img ?>" alt="">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
