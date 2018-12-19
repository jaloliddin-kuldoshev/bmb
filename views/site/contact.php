<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Контакты');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="des-heading-oth-pge" style="background-image: url(/uploads/<?= $data->banner ?>)">
    <h3><?= Yii::t('app', 'Контакты') ?></h3>
    <ul>
        <li><a href="/"><?= Yii::t('app', 'Главная') ?></a></li>
        <li><?= Yii::t('app', 'Контакты') ?></li>
    </ul>
</div>


<section class="asu_body_contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="asu_body_contact_text">
                    <h6><?= Yii::t('app', 'Адрес') ?></h6>
                    <p><?= $data->address ?></p>

                    <h6><?= Yii::t('app', 'Телефон') ?></h6>
                    <p><?= $data->phone ?></p>

                    <h6>Fax</h6>
                    <p><?= $data->fax ?></p>

                    <h6>E-mail</h6>
                    <p><?= $data->email ?></p>

                    <h6><?= Yii::t('app', 'Мы соц. сетях') ?>:</h6>
                    <p><a href="//<?= $data->tg ?>"><i class="fa fa-send"></i></a>
                        <a href="//<?= $data->ins ?>"><i class="fa fa-instagram"></i></a>
                        <a href="//<?= $data->fb ?>"><i class="fa fa-facebook"></i></a>
                    </p>

                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="asu_body_contact_text">
                    <?php ActiveForm::begin(['action' => Url::to(['site/form']), 'method' => 'post']); ?>
                    <div class="asu_frm-wrap">
                        <div class="asu_name_email">
                            <label for="name"><?= Yii::t('app', 'Имя') ?>*</label>
                            <br>
                            <input type="text" id="name" name="name" placeholder="<?= Yii::t('app', 'Имя') ?>">
                            <br>
                            <label for="company"><?= Yii::t('app', 'Компания') ?></label>
                            <br>
                            <input type="text" id="company" name="company"
                                   placeholder="<?= Yii::t('app', 'Компания') ?>">
                        </div>

                        <div class="asu_comp_phone">
                            <label for="email">Email*</label>
                            <br>
                            <input type="email" id="email" name="email" placeholder="youremail@example.com">
                            <br>
                            <label for="phone"><?= Yii::t('app', 'Телефон') ?>*</label>
                            <br>
                            <input type="text" id="phone" name="phone" placeholder="+998__ ___ __ __">
                        </div>
                    </div>
                    <div class="asu_comment">
                        <label for=""><?= Yii::t('app', 'Сообщение') ?></label>
                        <br>
                        <textarea name="message" id="" cols="30" rows="10"
                                  placeholder="<?= Yii::t('app', 'Сообщение') ?>"></textarea>
                    </div>

                    <button type="submit" class="btn asu_con_btn"><?= Yii::t('app', 'Отправить') ?></button>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>


        </div>
    </div>
</section>
<section class="map" style="height: 400px; width: 100%;">
    <?= $data->map ?>
</section>

<style>
    .asu_body_contact_form .fa {
        padding: 10px 9px;
        font-size: 20px;
        width: 40px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
    }

    .asu_body_contact_form .fa-facebook {
        background: #3B5998;
        color: white;
    }

    .asu_body_contact_form .fa-send {
        background: #55ACEE;
        color: white;
    }

    .asu_body_contact_form .fa-instagram {
        background: #ea4c89;
        color: white;
    }

    .map iframe {
        height: 100%;
        width: 100%;
    }

</style>
