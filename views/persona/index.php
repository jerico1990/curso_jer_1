<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div class="row">
    
    <div class="clearfix"></div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card " style="width: 643px">
            <div class="row pie" ></div>
            <div class="row cabecera"></div>
            <div class="row">                
                <div class="col-md-12">
                    <div class="card-head">
                        <header style="color: #1F8DCC;padding-left: 30px"></header>
                    </div><!--end .card-head -->
                    <div class="card-head text-justify" style="line-height:16px;padding-left: 30px;padding-right: 30px;color:#8C8C8C;font-size: 16px">
                            Tu registro se ha realizado satisfactoriamente. A continuación, debe hacer click en continuar para subir los documentos requeridos.
                    </div>
                    <div class="card-body " style="padding-left: 30px;padding-right: 30px;">
                        <table class="table table-bordered" >
                            <tr class="subtitulos"  ><td colspan="2" style="border-left: 0px;font-size: 16px">Información</td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px">Nombres:</td><td style="border-left:0px;font-size: 16px"><?= $persona->nombres ?></td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px">Apellidos:</td><td style="border-left:0px;font-size: 16px"><?= $persona->paterno." ".$persona->materno ?></td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px"> Nro de documento:</td><td style="border-left:0px;font-size: 16px"><?= $persona->nro_documento ?></td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px">Correo electrónico:</td><td style="border-left:0px;font-size: 16px"><?= $persona->correo_electronico ?></td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px">Celular / teléfono:</td><td style="border-left:0px;font-size: 16px"><?= $persona->celular." / ".$persona->telefono ?></td></tr>
                            <tr><td style="width: 200px;border-right:0px;color: #5EADDB;padding-left: 20px;font-size: 16px">Institución:</td><td style="border-left:0px;font-size: 16px"><?= $institucion->codigo_modular." - ".$institucion->denominacion ?></td></tr>
                        </table>
                        <div class="clearfix"></div>
                        <div class="col-md-12" style="line-height:16px;padding-left: 0px;padding-right: 30px;padding-bottom: 10px;color:#8C8C8C;font-size: 16px">
                            Para registrarte tienes que seguir los siguiente pasos:<br>
                        </div>
                        
                        <div class="clearfix"></div>
                        <div class="img_informacion"></div><br>
                        <div class="col-md-12">
                            <div class="text-right" >
                                <?= Html::a("Continuar >>",['documento/index'],['class'=>'btn text-center boton']);?>
                            </div>
                        </div>
                    </div><!--end .card-body -->
                </div><!--end .col -->
            </div><!--end .row -->
            
        </div><!--end .card -->
    </div>
</div><!--end .col -->