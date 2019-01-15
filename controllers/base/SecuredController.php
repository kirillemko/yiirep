<?php

namespace app\controllers\base;



use app\models\Tasks;
use app\models\User;
use app\models\Users;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SecuredController extends Controller
{
    function __construct($id, $module)
    {
        parent::__construct($id, $module);
        if( Yii::$app->user->isGuest ){
            $this->redirect('');
        }
    }

    /**
     * @return \app\models\Users
     */
    public function getUser()
    {
        return Yii::$app->user->identity;
    }
}
