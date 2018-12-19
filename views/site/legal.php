<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 13.12.2018
 * Time: 11:11
 */
$this->title = Yii::t('app', 'Правовая база');
?>

<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Правовая база') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Правовая база') ?></li>
    </ul>
</div>

<section class="asu_legalbase_body">
    <div class="container">
        <div class="asu_legalbase_wrap">
            <?php foreach ($model as $item): ?>
                <div class="asu_legalbase_text">
                    <a href="/uploads/<?= $item->file ?>"><p>
                            <?= $item->{'title_' . Yii::$app->language} ?>
                        </p></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>