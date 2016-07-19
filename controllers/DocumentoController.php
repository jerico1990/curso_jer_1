<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Usuario;
use app\models\Documento;
use app\models\Persona;
use app\models\Etapa;
use yii\web\UploadedFile;


class DocumentoController extends Controller
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
        $etapa2=Etapa::find()->where('persona_id=:persona_id and etapa=2',[':persona_id'=>$persona->id])->one();
        $model=Documento::find()->where('persona_id=:persona_id',[':persona_id'=>$persona->id])->one();
        if(!$model)
        {
            $model=new Documento;
            $model->id=NULL;
        }
        $model->persona_id=$persona->id;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            $model->save();
            $model->file1 = UploadedFile::getInstance($model, 'file1');
            $model->file2 = UploadedFile::getInstance($model, 'file2');
            $model->file3 = UploadedFile::getInstance($model, 'file3');
            $model->file4 = UploadedFile::getInstance($model, 'file4');
            $model->file5 = UploadedFile::getInstance($model, 'file5');
            if($model->file1)
            {
                $model->file1->saveAs('documentos1/' . $model->id . '_1.' . $model->file1->extension);
                $model->archivo1=$model->id . '_1.' . $model->file1->extension;
            }
            
            if($model->file2)
            {
                $model->file2->saveAs('documentos2/' . $model->id . '_2.' . $model->file2->extension);
                $model->archivo2=$model->id . '_2.' . $model->file2->extension;
            }
            
            if($model->file3)
            {
                $model->file3->saveAs('documentos3/' . $model->id . '_3.' . $model->file3->extension);
                $model->archivo3=$model->id . '_3.' . $model->file3->extension;
            }
            
            if($model->file4)
            {
                $model->file4->saveAs('documentos4/' . $model->id . '_4.' . $model->file4->extension);
                $model->archivo4=$model->id . '_4.' . $model->file4->extension;
            }
            
            if($model->file5)
            {
                $model->file5->saveAs('documentos5/' . $model->id . '_5.' . $model->file5->extension);
                $model->archivo5=$model->id . '_5.' . $model->file5->extension;
            }
            
            
            
            if(isset($_POST["etapa"]) && $_POST["etapa"]==1)
            {
                //$model->estado=1;
                
                $etapa2->estado=1;
                $etapa2->fecha_finalizado=date("Y-m-d H:i:s");
                $etapa2->update();
                $etapa3=new Etapa;
                $etapa3->persona_id=$persona->id;
                $etapa3->etapa=3;
                $etapa3->estado=0;
                $etapa3->fecha_inicio=date("Y-m-d H:i:s");
                $etapa3->save();
                return $this->redirect(['test/index']);
            }
            else
            {
                $model->update();
                return $this->refresh();
            }
            
        }
        
        return $this->render('index',['model'=>$model,'etapa2'=>$etapa2]);
    }
    
    public function actionEliminararchivo1()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $documento->archivo1=NULL;
            $documento->update();
        }
    }
    
    public function actionEliminararchivo2()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $documento->archivo2=NULL;
            $documento->update();
        }
    }
    
    public function actionEliminararchivo3()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $documento->archivo3=NULL;
            $documento->update();
        }
    }
    
    public function actionEliminararchivo4()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $documento->archivo4=NULL;
            $documento->update();
        }
    }
    
    public function actionEliminararchivo5()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $documento->archivo5=NULL;
            $documento->update();
        }
    }
    
    public function actionFinalizarDocumento()
    {
        if(isset($_POST["id"]) && $_POST["id"]!="")
        {
            $id=$_POST["id"];
            $documento=Documento::findOne($id);
            $usuario=Usuario::findOne(\Yii::$app->user->id);
            $persona=Persona::find()->where('id=:id',[':id'=>$usuario->persona_id])->one();
            $etapa2=Etapa::find()->where('persona_id=:persona_id and etapa=2',[':persona_id'=>$persona->id])->one();
        
            $etapa2->estado=1;
            $etapa2->update();
            $etapa3=new Etapa;
            $etapa3->persona_id=$persona->id;
            $etapa3->etapa=3;
            $etapa3->estado=0;
            $etapa3->save();
            return $this->redirect(['test/index']);
        }
    }
    
    
}
