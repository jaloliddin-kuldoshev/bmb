<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 12.12.2018
 * Time: 16:51
 */
$this->title = Yii::t('app', 'Дочерние компании');
?>
<!--start heading-oth-pge-->

<section class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Дочерние компании') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Дочерние компании') ?></li>
    </ul>
</section>

<!--end heading gallery-->
<!--*******************Дочерние компании*******************-->

<div class="project-heading">
    <h3><?= Yii::t('app', 'Наши дочерние компании') ?></h3>
</div>
<!--our projects cont-->
<div class="bmb_branch_items">
    <?php foreach ($model as $item): ?>
        <div class="bmb_branch_item">
            <div class="bmb_branch_item_img" style="background-image: url(/uploads/<?= $item->img?>)">
                <div class="bmb_branch_item_hover">
                    <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                    <a href="<?= \yii\helpers\Url::to(['site/company', 'id'=>$item->id])?>"><?= Yii::t('app', 'Перейти') ?></a>
                </div>
                <div class="bmb_branch_item_bottom_1">
                    <h3><?= $item->{'title_' . Yii::$app->language} ?></h3>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>
<!--our projects cont-->

<div class="des-bmb-in-com-pge-des">
    <div class="des-bmb-in-com-pge-des-item">
        <h4><?= Yii::t('app', 'Все эти проекты относятся к BMB Trade Group') ?></h4>
        <p><?= Yii::t('app', 'Для реализации комплекса проектов компании, создано три дочерних предприятия и три совместных предприятия') ?></p>
    </div>
</div>

<!--*******************Дочерние компании*******************-->
