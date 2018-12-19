<?php

namespace app\controllers;

use app\models\About;
use app\models\Alboum;
use app\models\Callback;
use app\models\Company;
use app\models\Contacts;
use app\models\Docs;
use app\models\forms\Login;
use app\models\Image;
use app\models\News;
use app\models\Projects;
use app\models\Review;
use app\models\Services;
use app\models\Slider;
use app\models\Team;
use app\models\User;
use app\models\Video;
use app\models\Workers;
use Yii;
use yii\data\Pagination;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\forms\ContactForm;

class SiteController extends Controller
{
    public function init()
    {

        if (!empty(Yii::$app->request->cookies['language'])) {
            Yii::$app->language = Yii::$app->request->cookies['language'];
        } else {
            Yii::$app->language = 'uz';
        }
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $slider = Slider::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        $comp = Company::find()->all();
        $review = Review::find()->all();
        $news = News::find()
            ->orderBy(['id' => SORT_DESC])
			->where(['<>','type', 3])
            ->limit(4)
            ->all();
        return $this->render('index', [
            'slider' => $slider,
            'comp' => $comp,
            'review' => $review,
            'news' => $news
        ]);
    }

    public function actionSetLanguage($l)
    {
        $langs = ['uz', 'ru', 'en'];
        if (in_array($l, $langs)) {
            \Yii::$app->language = $l;
            Yii::$app->session->set('app_lang', $l);
            $cookies = Yii::$app->response->cookies;
            $cookies->add(new \yii\web\Cookie([
                'name' => 'language',
                'value' => $l,
            ]));
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Login
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->getUser()->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {

        $data = Contacts::findOne(1);

        return $this->render('contact', [
            'data' => $data,
        ]);
    }


    /**
     * Mail send action smtp
     * */

    public function actionForm()
    {
        $model = new Callback();
        $model->name = Yii::$app->request->post('name');
        $model->comp = Yii::$app->request->post('company');
        $model->email = Yii::$app->request->post('email');
        $model->phone = Yii::$app->request->post('phone');
        $model->mes = Yii::$app->request->post('message');

        if ($model->save()) {
            return $this->redirect(Yii::$app->request->referrer);
        }


    }

    /**
     * Displays service page
     * @return string
     */
    public function actionService()
    {
        $model = Services::findOne(1);
        return $this->render('service', [
            'model' => $model,
        ]);
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
		
        $model = About::findOne(2);
		$work = Workers::find()
				->where(['company_id' => 8])
				->orderBy(['id' => SORT_DESC])
				->all();
        $comp = Company::find()->all();
        return $this->render('about', [
            'model' => $model,
            'comp' => $comp,
			'work' => $work
        ]);
    }
	public function actionSearch($q){
		
		
		$img = Image::findOne(1);
        $page = Company::find()
			->where(['like', 'title_en', $q])
			->orWhere(['like', 'title_ru', $q])
			->orWhere(['like', 'title_uz', $q])
			->all();
        
		
		$page1 = News::find()
			->where(['like', 'title_en', $q])
			->orWhere(['like', 'title_ru', $q])
			->orWhere(['like', 'title_uz', $q])
			->all();
			
        return $this->render('result',[
			'page' => $page,
			'page1' => $page1,
			'q' => $q,
			'img' => $img,
			]);

    }

    /**
     * Displays docs page
     *
     * @return string
     * */
    public function actionDoc()
    {
        $img = Image::findOne(1);
        $model = Docs::find()
            ->where(['type' => 1])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('docs', [
            'model' => $model,
            'img' => $img,
        ]);


    }

    public function actionAffiliated()
    {
        $img = Image::findOne(5);
        $model = Company::find()
            ->where(['type' => 1])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('affiliated', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionVentures()
    {
        $img = Image::findOne(5);
        $model = Company::find()
            ->where(['type' => 2])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('ventures', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionCompany($id)
    {
        $model = Company::findOne($id);
        return $this->render('company', [
            'model' => $model,
        ]);
    }

    public function actionLegalBase()
    {
        $img = Image::findOne(1);
        $model = Docs::find()
            ->where(['type' => 2])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('legal', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionProjects()
    {
        $model = Projects::findOne(3);
        return $this->render('projects', [
            'model' => $model,
        ]);
    }

    public function actionMembers()
    {
        $img = Image::findOne(3);
        $model = Team::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('members', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionNews()
    {
        $img = Image::findOne(2);
        $slider = News::find()
            ->orderBy(new Expression('rand()'))
            ->limit(3)->all();

        $model = News::find()
            ->where(['type' => 1])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        $model2 = News::find()
            ->where(['type' => 2])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        $model3 = News::find()
            ->where(['type' => 3])
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('news', [
            'model' => $model,
            'slider' => $slider,
            'model2' => $model2,
            'model3' => $model3,
            'img' => $img,
        ]);
    }

    public function actionOneNews($id)
    {
        $img = Image::findOne(2);
        $model = News::findOne($id);
        return $this->render('oneNews', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionAlboum()
    {
        $img = Image::findOne(4);
        $query = Alboum::find();
        $count = $query->count();
        $pages = new Pagination(['totalCount' => $count, 'pageSize' => 4]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->orderBy(['id' => SORT_DESC])
            ->all();

        return $this->render('alboum', [
            'model' => $models,
            'pages' => $pages,
            'img' => $img,
        ]);
    }

    public function actionOneAlboum($id)
    {
        $img = Image::findOne(4);
        $model = Alboum::findOne($id);
        return $this->render('photo', [
            'model' => $model,
            'img' => $img,
        ]);
    }

    public function actionVideo()
    {
        $img = Image::findOne(4);
        $model = Video::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
        return $this->render('video', [
            'model' => $model,
            'img' => $img,
        ]);
    }


}
