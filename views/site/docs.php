<?php
/**
 * Created by PhpStorm.
 * User: User-17
 * Date: 12.12.2018
 * Time: 16:03
 */
$this->title = Yii::t('app', 'Документы');
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $img->img ?>)">
    <h3><?= Yii::t('app', 'Документы') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Документы') ?></li>
    </ul>
</div>

<section class="asu_documents_body">
    <div class="container">
        <div class="asu-doc-txt-wrap">
            <?php foreach ($model as $item): ?>
                <div class="asu_documents_text">
                    <a href="/uploads/<?= $item->file ?>"><p><span><?= $item->{'title_' . Yii::$app->language} ?></span></p></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
