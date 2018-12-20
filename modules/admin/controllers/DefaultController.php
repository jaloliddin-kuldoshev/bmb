<?php

namespace app\modules\admin\controllers;

use mdm\admin\models\form\ChangePassword;
use mdm\admin\models\form\Login;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        Yii::$app->language = 'ru';
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'login';
        $model = new Login();

        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->redirect('/admin');
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect('/admin/default/login');
    }

    public function actionChangePassword()
    {
        $this->layout = 'login';
        $model = new ChangePassword();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->change()) {
            return $this->goHome();
        }

        return $this->render('change-password', [
            'model' => $model,
        ]);
    }

}
