<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 11:43
 */
$this->title = Yii::t('app', 'Представители');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Представители') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Представители') ?></li>
    </ul>
</div>

<section class="asu_member_body">
    <div class="container">

        <?php foreach ($model as $key => $item): ?>
            <div class="row">

                <div class="col-lg-3 col-md-12 asu_pd_membr">
                    <div class="asu_member_photo">
                        <img src="/uploads/<?= $item->img ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 asu_pd_membr">
                    <div class="asu_member_text">
                        <h5><b><?= $item->{'title_' . Yii::$app->language} ?></b></h5>
                        <p><big><?= $item->{'position_' . Yii::$app->language} ?></big></p>
                        <?= $item->{'text_' . Yii::$app->language} ?>
                    </div>
                </div>

            </div>
            <?php if ($key != count((array)$model) - 1): ?>
                <hr class="asu_hr">
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>
