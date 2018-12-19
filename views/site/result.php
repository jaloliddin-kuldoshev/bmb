<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 12.12.2018
 * Time: 15:17
 */
 use yii\helpers\Url;
 $this->title = Yii::t('app', 'Поиск');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img?>)">
    <h3><?= Yii::t('app', 'Поиск') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная')?></a></li>
        <li><?= Yii::t('app', 'Поиск') ?></li>
    </ul>
</div>

<section class="asu_service_body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="asu_service_text">
                    <?php if(!empty($page) || !empty($page1)): ?>
						<div class="redLine"><?= Yii::t('app','По запросу "{q}" найдены следующие страницы',[
                        'q' => $q
						]) ?>:</div>
            <div class="search">
                <ul>
                    <?php foreach ($page as $item):?>
                    <li>
                        <a href="<?= Url::to(['/site/company','id' => $item->id]) ?>"><i class="fa fa-chevron-right"></i> <?= $item->{'title_' . Yii::$app->language} ?></a>
                    </li>
                    <?php endforeach;?>
					<?php foreach ($page1 as $item):?>
                    <li>
                        <a href="<?= Url::to(['/site/news','id' => $item->id]) ?>"><i class="fa fa-chevron-right"></i> <?= $item->{'title_' . Yii::$app->language} ?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>

        <?php else:?>
        <h3 class="inlineHeader"><?= Yii::t('app','По Вашему запросу "{q}" ничего не найдено',[
                'q' => $q
            ]) ?></h3></div>
        <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>