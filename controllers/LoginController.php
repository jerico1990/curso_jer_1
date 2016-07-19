<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class LoginController extends Controller
{
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
                    //'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $this->layout="login";
        if (!\Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            /*$log=new LogSesion();
            $log->user_id=\Yii::$app->user->id;
            $log->hora_logeo=date("Y-m-d H:i:s");
            $log->save();*/
            return $this->redirect(['persona/index']);
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }
    
    
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
