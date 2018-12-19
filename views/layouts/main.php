<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$contact = \app\models\Contacts::findOne(1);
$xml_string = file_get_contents('http://cbu.uz/ru/arkhiv-kursov-valyut/json/');
        $data = json_decode($xml_string, JSON_UNESCAPED_UNICODE);
        $array = [];
        if (isset($data)) {     
        foreach ($data as $key => $value) {
          if(isset($value)){
            if (in_array($value['Ccy'], ['USD','EUR','RUB','GBP','CNY'])) {
                $array[$key]['Ccy'] = $value['Ccy'];
               $array[$key]['Rate'] = $value['Rate']; 
            }
          }            
        }
      }
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/site/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- start header  -->
<header class="bmb_header">
    <div class="bmb_header_logo">
        <a href="/">
            <img src="/site/images/logo.png" alt="">
        </a>
    </div>
    <div class="bmb_header_menu">
        <ul class="bmb_header_nav">
            <li class="<?= Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>"><a
                        href="/"><?= Yii::t('app', 'Главная') ?></a></li>
            <li class="bmb_header_menu_drop"><a href="#">BMB TG</a>
                <div class="bmb_header_dropdown ">
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/about']) ?>"><?= Yii::t('app', 'О Компании') ?></a>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/affiliated']) ?>"><?= Yii::t('app', 'Дочерние компании') ?></a>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/ventures']) ?>"><?= Yii::t('app', 'Совместные предприятия') ?></a>
                    <a class="dropdown-item" href="<?= Url::to(['/site/doc']) ?>"><?= Yii::t('app', 'Документы') ?></a>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/legal-base']) ?>"><?= Yii::t('app', 'Правовая база') ?></a>
                </div>
            </li>
            <li class="<?= Yii::$app->controller->action->id == 'projects' ? 'active' : '' ?>"><a
                        href="<?= Url::to(['/site/projects']) ?>"><?= Yii::t('app', 'Проекты') ?></a></li>
            <li class="<?= Yii::$app->controller->action->id == 'service' ? 'active' : '' ?>"><a
                        href="<?= Url::to(['/site/service']) ?>"><?= Yii::t('app', 'Сервисы') ?></a></li>
            <li class="<?= Yii::$app->controller->action->id == 'news' ? 'active' : '' ?>"><a
                        href="<?= Url::to(['/site/news']) ?>"><?= Yii::t('app', 'Новости') ?></a></li>
            <li class="<?= Yii::$app->controller->action->id == 'members' ? 'active' : '' ?>"><a
                        href="<?= Url::to(['/site/members']) ?>"><?= Yii::t('app', 'Представители') ?></a></li>
            <li class="bmb_header_menu_drop"><a href="#"><?= Yii::t('app', 'Медиатека') ?></a>
                <div class="bmb_header_dropdown ">
                    <a class="dropdown-item" href="<?= Url::to(['/site/video']) ?>"><?= Yii::t('app', 'Видео') ?></a>
                    <a class="dropdown-item" href="<?= Url::to(['/site/alboum']) ?>"><?= Yii::t('app', 'Фото') ?></a>
                </div>
            </li>
            <li class="<?= Yii::$app->controller->action->id == 'contact' ? 'active' : '' ?>"><a
                        href="<?= Url::to(['/site/contact']) ?>"><?= Yii::t('app', 'Контакты') ?></a></li>
            <li class="bmb_header_weather">
                <a target="_blank"
                   href="https://www.booked.net/weather/tashkent-12205"><img
                            src="https://w.bookcdn.com/weather/picture/13_12205_1_1_274062_158_fff5d9_ffffff_ffffff_2_fff5d9_333333_0_6.png?scode=124&domid=&anc_id=34961"
                            alt="booked.net"/></a>
                <a target="_blank" href="https://www.booked.net/weather/jizzax-387468"><img
                            src="https://w.bookcdn.com/weather/picture/13_387468_1_1_274062_158_fff5d9_ffffff_ffffff_2_fff5d9_333333_0_6.png?scode=124&domid=&anc_id=34961"
                            alt="booked.net"/></a>
            </li>
        </ul>
    </div>
    <div class="bmb_header_search_lang">
        <form action="<?= Url::to(['/site/search']) ?>" method="get">
            <div class="input-group mb-3">

                <input type="text" name="q" class="form-control" placeholder="<?= Yii::t('app', 'Поиск') ?>..." aria-label=""
                       aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"
                                                                               aria-hidden="true"></i>
                    </button>
                </div>

            </div>
        </form>
        <div class="bmb_header_lang">
            <a href="#"><?php if (Yii::$app->language == 'ru') {
                    echo 'Рус';
                } elseif ((Yii::$app->language == 'en')) {
                    echo 'Eng';
                } else {
                    echo 'Uzb';
                } ?></a>
            <ul>
                <?php if (Yii::$app->language != 'uz'): ?>
                    <li><a href="<?= Url::to(['/site/set-language', 'l' => 'uz']) ?>"
                           class="<?= Yii::$app->language == 'en' ? 'lan-active' : '' ?>">Uzb</a></li>
                <?php endif; ?>
                <?php if (Yii::$app->language != 'en'): ?>
                    <li><a href="<?= Url::to(['/site/set-language', 'l' => 'en']) ?>"
                           class="<?= Yii::$app->language == 'en' ? 'lan-active' : '' ?>">Eng</a></li>
                <?php endif; ?>
                <?php if (Yii::$app->language != 'ru'): ?>
                    <li><a href="<?= Url::to(['/site/set-language', 'l' => 'ru']) ?>"
                           class="<?= Yii::$app->language == 'en' ? 'lan-active' : '' ?>">Рус</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="/"><?= Yii::t('app', 'Главная') ?></a>
            <button class="collapse-lk-button" data-toggle="collapse" data-target="#product">
                BMB TG
            </button>
            <div id="product" class="collapse collapse-lk-main-menu">
                <div>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/affiliated']) ?>"><?= Yii::t('app', 'Дочерние компании') ?></a>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/ventures']) ?>"><?= Yii::t('app', 'Совместные предприятия') ?></a>
                    <a class="dropdown-item" href="<?= Url::to(['/site/doc']) ?>"><?= Yii::t('app', 'Документы') ?></a>
                    <a class="dropdown-item"
                       href="<?= Url::to(['/site/legalBase']) ?>"><?= Yii::t('app', 'Правовая база') ?></a>
                </div>

            </div>
            <a href="<?= Url::to(['/site/projects']) ?>"><?= Yii::t('app', 'Проекты') ?></a>
            <a href="<?= Url::to(['/site/service']) ?>"><?= Yii::t('app', 'Сервисы') ?></a>
            <a href="<?= Url::to(['/site/news']) ?>"><?= Yii::t('app', 'Новости') ?></a>
            <a href="<?= Url::to(['/site/members']) ?>"><?= Yii::t('app', 'Представители') ?></a>
            <button class="collapse-lk-button" data-toggle="collapse" data-target="#product123">
                <?= Yii::t('app', 'Медиатека') ?>
            </button>
            <div id="product123" class="collapse collapse-lk-main-menu">
                <div>
                    <a class="dropdown-item" href="<?= Url::to(['/site/video']) ?>"><?= Yii::t('app', 'Видео') ?></a>
                    <a class="dropdown-item" href="<?= Url::to(['/site/alboum']) ?>"><?= Yii::t('app', 'Фото') ?></a>
                </div>

            </div>
            <a href="<?= Url::to(['/site/contact']) ?>"><?= Yii::t('app', 'Контакты') ?></a>
            <a target="_blank"
               href="https://www.booked.net/weather/tashkent-12205"><img
                        src="https://w.bookcdn.com/weather/picture/13_12205_1_1_274062_158_fff5d9_ffffff_ffffff_2_fff5d9_333333_0_6.png?scode=124&domid=&anc_id=34961"
                        alt="booked.net"/></a>
            <a target="_blank" href="https://www.booked.net/weather/jizzax-387468"><img
                        src="https://w.bookcdn.com/weather/picture/13_387468_1_1_274062_158_fff5d9_ffffff_ffffff_2_fff5d9_333333_0_6.png?scode=124&domid=&anc_id=34961"
                        alt="booked.net"/></a>

        </div>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</header>
<!--end header-->

<?= $content ?>
<!--start contact now-->
<section class="bmb_contact_now">
    <button class="bmb_contact_now_button" data-toggle="modal" data-target="#myModal"><?= Yii::t('app', 'Связаться с нами') ?></button>
</section>
<!--end contact now-->
<!--start partners block-->
<section class="bmb_partners">
    <?php foreach (\app\models\Partners::find()->all() as $item): ?>
        <div class="bmb_partners_img">
            <a href="<?= $item->href ?>">
                <img src="/uploads/<?= $item->img ?>" alt="">
            </a>
        </div>
    <?php endforeach; ?>

</section>
<!--end partners block-->
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?= Yii::t('app', 'Связаться с нами') ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php ActiveForm::begin(['action' => Url::to(['site/form']), 'method' => 'post']); ?>
			<div class="form-group">
				<label for="exampleInputEmail1"><?= Yii::t('app', 'Имя') ?></label>
				<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= Yii::t('app', 'Имя') ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1"><?= Yii::t('app', 'Компания') ?></label>
				<input type="text" name="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= Yii::t('app', 'Компания') ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="youremail@example.com">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1"><?= Yii::t('app', 'Телефон') ?></label>
				<input type="tel" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+998__ ___ __ __">
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1"><?= Yii::t('app', 'Сообщение') ?></label>
				<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  <?php ActiveForm::end(); ?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
        </div>
        
      </div>
    </div>
  </div>
<footer class="bmb_footer">
    <div class="container">
        <div class="row">
            <div class="col  bmb_footer_menu">
                <h4><?= Yii::t('app', 'О BMB Trade Group') ?></h4>
                <a href="<?= Url::to(['/site/about']) ?>"><?= Yii::t('app', 'О Компании') ?></a>
                <a href="<?= Url::to(['/site/doc']) ?>"><?= Yii::t('app', 'Документы') ?></a>
                <a href="<?= Url::to(['/site/legal-base']) ?>"><?= Yii::t('app', 'Правовая база') ?></a>
            </div>
            <div class="col ">
                <h4><?= Yii::t('app', 'Проекты') ?></h4>
                <?php foreach (\app\models\Company::find()->all() as $item): ?>
                    <a href="<?= Url::to(['site/company', 'id' => $item->id]) ?>"><?= $item->{'title_' . Yii::$app->language} ?></a>
                <?php endforeach; ?>
            </div>
            <div class="col ">
                <h4><?= Yii::t('app', 'Контакты') ?></h4>
                <p><?= $contact->{'address_' . Yii::$app->language} ?></p>
                <p><span>Tel: <?= $contact->phone ?> <br> Fax: <?= $contact->fax ?></span></p>
                <p>E-mail: <?= $contact->email ?></p>
            </div>
            <div class="col ">
                <h4><?= Yii::t('app', 'Мы соц. сетях') ?>:</h4>
                <a href="//<?= $contact->tg ?>"><i class="fa fa-send"></i><?= $contact->tg ?></a>
                <a href="//<?= $contact->ins ?>"><i class="fa fa-instagram"></i><?= $contact->ins ?></a>
                <a href="//<?= $contact->fb ?>"><i class="fa fa-facebook"></i><?= $contact->fb ?></a>
            </div>
            <div class="col  bmb_exchange_rate">
                <h4><?= Yii::t('app', 'Курс валют') ?></h4>
				
                <p class="cbu_rate">CBU rate</p>
				<?php foreach($array as $item): ?>
					<p><span><?= $item["Ccy"] ?></span><?= $item["Rate"] ?></p>
				<?php endforeach; ?>
            </div>
            <hr>
            <p class="copy_right">© Copyright 2018 - Web developed by <a href="//sos.uz">SOS Group</a></p>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
