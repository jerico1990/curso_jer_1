<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuario;
use app\models\Carta;
use app\models\Persona;
use app\models\Etapa;
class CartaController extends Controller
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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    
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
        $etapa4=Etapa::find()->where('persona_id=:persona_id and etapa=4',[':persona_id'=>$persona->id])->one();
        
        $model=Carta::find()->where('persona_id=:persona_id',[':persona_id'=>$persona->id])->one();
        if(!$model)
        {
            $model=new Carta;
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $etapa4->estado=1;
            $etapa4->fecha_finalizado=date("Y-m-d H:i:s");
            $etapa4->update();
            $model->persona_id=$persona->id;
            $model->save();
            $persona=Persona::findOne($model->persona_id);
            $subject="CURSO VIRTUAL METODOLOGÍA DE INGLÉS";
            $content="<img src='http://204.93.161.92/minedu/inglesjer/updating_my_learning/web/img/registrar/cabecera.jpg'> <br><br>
                        Mediante este correo te informamos que has completado tu inscripción.
                        <br><br>
                        <b>Nota: el curso cuenta con 1000 vacantes para la presente edición.
                     ";
            Yii::$app->mail->compose('@app/mail/layouts/html',['content'=>$content])
           ->setFrom('cursoestrategiasinglesjer@perueduca.pe')
           ->setTo($persona->correo_electronico)
           ->setSubject($subject)
           ->send();
           
            Yii::$app->session->setFlash('carta');
            
            return $this->refresh();
        }
        
        return $this->render('index',['model'=>$model,'etapa4'=>$etapa4,'persona'=>$persona]);
    }
    
}
