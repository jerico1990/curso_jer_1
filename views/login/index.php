<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/notify/bootstrap-notify.js"></script>
<?php if (Yii::$app->session->hasFlash('loginerror')): ?>
<script>
    $.notify({
        message: 'Tu usuario o contraseña está mal ingresado' 
    },{
        type: 'danger',
        z_index: 1000000,
        placement: {
            from: 'bottom',
            align: 'right'
        },
    });
</script>
<?php endif; ?>

<div class="logo"></div>
<div class="block_login" style="background: white">
    <div class="card contain-sm-login" style="border: 2px solid #DB2316;border-radius:20px 20px 20px 20px;">
        <div class="card-body" style="padding: 0px;height: 100%;border-radius:20px 20px 20px 20px;">
                <div class="col-md-6 " style="padding-top: 15px;padding-bottom: 30px;background: #DB2316;color: white;height: 100% !important;border-radius:15px 0px 0px 15px">
                    <div class="form-group">
                        <h2 class="text-center" >CURSO VIRTUAL METODOLOGÍA DE INGLÉS</h2>
                    </div>
                    <div class="form-group" style="padding-bottom: 8px">
                        <h3 class="text-center"><i>Updating my learning</i></h3>
                    </div>
                    
                    <div class="row" >
                        <div class="text-center" >
                        <?= Html::a("Regístrate aquí",['registrar/index'],['class'=>'btn text-center letra','style'=>'border-radius:15px 15px 15px 15px;background:#EBEBEB;color:#575757']);?>
                        </div>
                    </div>
                </div><!--end .col -->
                <div class="col-md-6" style="padding-top: 15px;padding-bottom: 30px;height: 100% !important;">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['class' => 'form ','style'=>'margin-left:20px;margin-right:20px'],
                    ]); ?>
                        <div class="form-group" style="margin-bottom: 10px;color: #575757 !important">
                            <input type="text" class="form-control" id="username" name="LoginForm[username]">
                            <label for="username" style="color: #575757 !important;font-size: 16px !important"><b>Usuario</b></label>
                        </div>
                        <div class="form-group" style="color: #575757;">
                            <input type="password" class="form-control" id="password" name="LoginForm[password]">
                            <label for="password" style="color: #575757 !important;font-size: 16px !important"><b>Contraseña</b></label>
                            
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button id="login" class="btn btn-primary letra text-center" type="submit" style="background: #DB2316;border: 1px solid #DB2316;border-radius:15px 15px 15px 15px">Iniciar sesión</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    <?php ActiveForm::end(); ?>
                </div><!--end .col -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</div>
<?php /*
<div class="card contain-sm style-transparent" style="border: 2px solid #AF0D15">
    <div class="card-body" style="padding: 0px">
            <div class="col-md-6 " style="background: #AF0D15;max-height: 100%;color: white">
                <br>
                <h1 class="text-center">Curso JER</h1>
                <br>
                <h3 class="text-center">
                    ¿Aun no tienes cuenta?
                </h3>
                <div class="text-center">
                <?= Html::a("Regístrate aquí",['registrar/index'],['class'=>'btn  btn-raised btn-default text-center']);?>
                </div>
                <br><br><br><br>
            </div><!--end .col -->
            <div class="col-md-6">
                <br/>
                <br/><br/>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form floating-label','style'=>'margin-left:20px;margin-right:20px'],
                ]); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="LoginForm[username]">
                        <label for="username">Usuario</label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="LoginForm[password]">
                        <label for="password">Contraseña</label>
                        
                    </div>
                    <br/>
                    <div class="row">
                        <!--
                        <div class="col-xs-6 text-left">
                            <div class="checkbox checkbox-inline checkbox-styled">
                                <label>
                                    <input type="checkbox"> <span>Remember me</span>
                                </label>
                            </div>
                        </div>
                        -->
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary  text-center" type="submit" style="background: #AF0D15;border: 1px solid #AF0D15">Iniciar sesión</button>
                        </div><!--end .col -->
                    </div><!--end .row -->
                <?php ActiveForm::end(); ?>
            </div><!--end .col -->
            

    </div><!--end .card-body -->
</div><!--end .card -->
*/ ?>

<script>
    $('#login').click(function(){
        var error="";
        if ($('#username').val()=='') {
            error=error+'Usted debe ingresar su usuario<br>';
        }
        
        if ($('#password').val()=='') {
            error=error+'Usted debe ingresar su contraseña <br>';
        }
        
        
        if (error!='')
        {
            $.notify({
                message: error 
            },{
                type: 'danger',
                z_index: 1000000,
                placement: {
                    from: 'bottom',
                    align: 'right'
                },
            });
            return false;
        }
        else
        {
           return true; 
        }
    });
</script>