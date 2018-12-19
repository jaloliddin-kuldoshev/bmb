<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 12.12.2018
 * Time: 15:17
 */
$this->title = Yii::t('app', 'Сервисы');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $model->banner?>)">
    <h3><?= Yii::t('app', 'Сервисы') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная')?></a></li>
        <li><?= Yii::t('app', 'Сервисы') ?></li>
    </ul>
</div>

<section class="asu_service_body">
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
