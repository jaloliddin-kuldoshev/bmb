<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 16:25
 */
$this->title = Yii::t('app', 'Видео');
?>
<!--start heading-oth-pge-->

<section class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Видео') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Видео') ?></li>
    </ul>
</section>

<!--end heading oth-pge-->

<!--video content-->
<!--<section class="des-video-content">-->
<!--    --><?php //foreach ($model as $key => $item): ?>
<!--        --><?php //if ($key == 0): ?>
<!--            --><?php //if ($item->img): ?>
<!--                <video controls>-->
<!--                    <source src="/uploads/--><?//= $item->img ?><!--" type="video/mp4">-->
<!--                    <source src="/uploads/--><?//= $item->img ?><!--" type="video/ogg">-->
<!--                </video>-->
<!--            --><?php //endif; ?>
<!--            --><?php //if ($item->link): ?>
<!--                <iframe src="--><?//= $item->link ?><!--" frameborder="0"></iframe>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endif; ?>
<!--    --><?php //endforeach; ?>
<!---->
<!--</section>-->

<section class="des-video-lst-content container">
    <div class="row">
        <?php foreach ($model as $key => $item): ?>

            <?php if ($item): ?>
                <div class="col-md-4 des-video-lst-elem">
                    <a href="">
                        <div class="des-video-lst-box">
                            <?php if ($item->img): ?>
                                <video controls class="video-lst-img">
                                    <source src="/uploads/<?= $item->img ?>" type="video/mp4">
                                    <source src="/uploads/<?= $item->img ?>" type="video/ogg">
                                </video>
                            <?php endif; ?>
                            <?php if ($item->link): ?>
                                <iframe class="video-lst-img" src="<?= $item->link ?>" frameborder="0"></iframe>
                            <?php endif; ?>
                            <div class="video-lst-desc">
                                <h4><?= $item->{'title_' . Yii::$app->language} ?></h4>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>
</section>
<!--video content-->
