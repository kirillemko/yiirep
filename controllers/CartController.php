<?php

namespace app\controllers;

use app\models\LoginForm;
use Yii;
use app\models\Users;
use app\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
{
    public function actionRegister()
    {
        $user = new Users();
        if ($user->load(Yii::$app->request->post())) {

        }

        return $this->render('register', [
            'model' => $user,
        ]);
    }

    public function actionSecret()
    {
        if( Yii::$app->user->isGuest ){
            return $this->redirect(['index']);
        }

        echo 'safadasfd';
        exit();
    }

    public function actionIndex()
    {
        $isGuest = Yii::$app->user->isGuest;
        echo '<pre>';
        print_r($isGuest);
        print_r(Yii::$app->user->identity->login);
        exit();
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['index']);
    }

    public function actionLogin()
    {
        $loginForm = new LoginForm();

        if ($loginForm->load(Yii::$app->request->post())) {

            if( $loginForm->validate() ){
                return $this->redirect(['index']);
            }

        }

        return $this->render('login', [
            'model' => $loginForm,
        ]);
    }
}
