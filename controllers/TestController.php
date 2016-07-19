<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuario;
use app\models\Test;
use app\models\Persona;
use app\models\Etapa;
class TestController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        $this->layout='panel';
        $usuario=Usuario::findOne(\Yii::$app->user->id);
        $persona=Persona::find()->where('id=:id',[':id'=>$usuario->persona_id])->one();
        $etapa3=Etapa::find()->where('persona_id=:persona_id and etapa=3',[':persona_id'=>$persona->id])->one();
        $model=Test::find()->where('persona_id=:persona_id',[':persona_id'=>$persona->id])->one();
        if(!$model)
        {
            $model=new Test;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->persona_id=$persona->id;
            $model->save();
            
            if(isset($_POST["etapa"]) && $_POST["etapa"]==1)
            {
                
                $etapa3->estado=1;
                $etapa3->fecha_finalizado=date("Y-m-d H:i:s");
                $etapa3->update();
                $etapa4=new Etapa;
                $etapa4->persona_id=$persona->id;
                $etapa4->etapa=4;
                $etapa4->estado=0;
                $etapa4->fecha_inicio=date("Y-m-d H:i:s");
                $etapa4->save();
                return $this->redirect(['carta/index']);
            }
            else
            {
                return $this->refresh();
            }
        }
        return $this->render('index',['model'=>$model,'etapa3'=>$etapa3]);
    }
    
}
