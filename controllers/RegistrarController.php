<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Persona;
use app\models\Usuario;
use app\models\Institucion;
use app\models\Etapa;
use yii\helpers\Json;
class RegistrarController extends Controller
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
                    'logout' => ['post'],
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
        $this->layout="registrar";
        $model=new Persona;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            //var_dump($model->celular." ".$model->telefono);die;
            $random=Yii::$app->getSecurity()->generateRandomString(8);
            $model->save();
            $usuario=new Usuario;
            $usuario->username=$model->nro_documento;
            $usuario->password=Yii::$app->getSecurity()->generatePasswordHash($model->clave);
            $usuario->persona_id=$model->id;
            $usuario->status=1;
            $usuario->fecha_registro=date("Y-m-d H:i:s");
            $usuario->save();
            $etapa=new Etapa;
            $etapa->persona_id=$model->id;
            $etapa->etapa=1;
            $etapa->estado=1;
            $etapa->fecha_inicio=date("Y-m-d H:i:s");
            $etapa->fecha_finalizado=date("Y-m-d H:i:s");
            $etapa->save();
            
            $etapa1=new Etapa;
            $etapa1->persona_id=$model->id;
            $etapa1->etapa=2;
            $etapa1->estado=0;
            $etapa1->fecha_inicio=date("Y-m-d H:i:s");
            $etapa1->save();
            $subject="Bienvenido al registro para el CURSO VIRTUAL METODOLOGÍA DE INGLÉS";
            $content="  <img src='http://204.93.161.92/minedu/inglesjer/updating_my_learning/web/img/registrar/cabecera.jpg'> <br><br>
                        Gracias por registrarte. Por favor continúa con tu inscripción mediante este
                        <a href='http://204.93.161.92/minedu/inglesjer/updating_my_learning/'>enlace</a>, ingresando los siguientes datos:
                        <br><br>
                        <b>Usuario:</b> $usuario->username <br>
                        <b>Contraseña:</b> $model->clave <br><br>
                        <br>
                        Nota: tu usuario y contraseña es únicamente válida para el presente registro.
                     ";
            Yii::$app->mail->compose('@app/mail/layouts/html',['content'=>$content])
           ->setFrom('cursoestrategiasinglesjer@perueduca.pe')
           ->setTo($model->correo_electronico)
           ->setSubject($subject)
           ->send();
            Yii::$app->session->setFlash('registrado');
            return $this->refresh();
        }
        return $this->render('index');
    }
    
    public function actionInstituciones($q = null) {
        
        $codigos=  Institucion::find()
                    ->where('codigo_modular like "%'.$q.'%"
                           
                            ')
                    ->limit(5)->all();
       
        $out = [];
        if($codigos)
        {
            foreach ($codigos as $d) {
                $out[] = ['id' => $d->id,'denominacion' => $d->denominacion,'codigo_modular'=>$d->codigo_modular,'ugel'=>$d->ugel,'dre'=>$d->dre];
            }
        }
        else
        {
            $out[] = ['id' => null,'denominacion' => null,'codigo_modular'=>null,'ugel'=>null,'dre'=>null];
        }
        
        echo Json::encode($out);
    }
    
    public function actionDni()
    {
        if(isset($_POST['dni'])){
            $dni=$_POST['dni'];
            $persona=Persona::find()->where('nro_documento=:nro_documento',[':nro_documento'=>$dni])->one();
            if($persona)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
    }
    
    public function actionEmail()
    {
        if(isset($_POST['email'])){
            $email=$_POST['email'];
            $persona=Persona::find()->where('correo_electronico=:correo_electronico',[':correo_electronico'=>$email])->one();
            if($persona)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
    }
    
    public function actionCodigo()
    {
        if(isset($_POST['codigo'])){
            $codigo=$_POST['codigo'];
            $institucion=Institucion::find()->where('codigo_modular=:codigo_modular',[':codigo_modular'=>$codigo])->one();
            if(!$institucion)
            {
                echo 1;
            }
            else
            {
                echo 0;
            }
        }
    }

}
