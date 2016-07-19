
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<style>
    .checkbox-styled:not(ie8) input[disabled]:checked ~ span:before
    {
        border-color:green;
    }
</style>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <?php if(Yii::$app->session->hasFlash('carta')): ?>
        <div class="card " style="width: 643px;background: #F1F1F1" >
            <div class="row pie" ></div>
            <div class="card-head text-center cabecera" ></div>
            <div class="card-head text-center " style="color: red;">
		    <h2></h2>
		</div>
            <div class="card-head " style="line-height:20px">
                <div class="col-md-12 text-center" style="color:#8C8C8C;padding-left: 30px;padding-right: 30px">
                    <p style="font-size: 20px">Te has inscrito al <br>
                        CURSO VIRTUAL METODOLOGÍA DE INGLÉS<br>
                        <i style="font-size: 16px">Updating my learning</i>
                    </p>
                </div>
            </div>
            <div class="card-body tab-content text-center" align="center">
                <?= Html::a("Gracias",['login/index'],['class'=>'btn text-center boton_gracias','style'=>'font-size:16px;width:150px;']);?>
            </div>
            <div class="card-head " style="line-height:20px">
                <div class="col-md-12 text-center" style="color:#8C8C8C;padding-left: 30px;padding-right: 30px">
                    <p style="font-size: 16px">Nos pondremos en contacto al correo brindado al culminar la convocatoria.
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
            
        </div>
        <?php else: ?>
        <div class="card" style="width: 643px">
            <div class="card-body pie" ></div>
            <div class="card-head text-center cabecera" ></div>
            <div class="card-head text-center " style="color: red;">
                    <h2>CARTA DE COMPROMISO</h2>
            </div>
            <?php $form = ActiveForm::begin(); ?>
            <div class="card-body" style="border: 10px solid #DADADA;margin-left: 40px;margin-right: 40px;border-radius:15px 15px 15px 15px;">
                <div >
                    <p class="text-justify" style="font-size: 14px;">
                        Yo, <b><?= mb_strtoupper($persona->nombres." ".$persona->paterno." ".$persona->materno) ?> </b> identificado(a) con DNI:<b> <?= $persona->nro_documento ?></b>, confirmo que la información registrada en el presente formulario es verdadera y, de ser seleccionado
                        como participante del curso, me comprometo a culminar satisfactoriamente el “CURSO VIRTUAL METODOLOGÍA DE INGLÉS”, brindado por la Dirección de Secundaria del Ministerio de Educación a través de la plataforma PerúEduca, cuyo objetivo es fortalecer las competencias metodológicas
                        de los docentes de inglés pertenecientes a las Instituciones Educativas con Jornada Escolar Regular. Asimismo, me comprometo a participar activamente en las propuestas y en la elaboración de productos solicitados a fin de culminar el curso satisfactoriamente.
                        <br><br>
                        En caso de no cumplir con el compromiso adquirido, acepto como consecuencia no estar habilitado(a) para participar de otro curso y/o beca de inglés ofrecida por el Ministerio de Educación durante los 2 años siguientes a la culminación del presente curso virtual.
                       
                       <!-- Esta es la última etapa del registro en la cual lo invitamos a confirmar su inscripción al curso aceptando la Carta de Compromiso y confirmando que todos los datos y documentos presentados son válidos. Le agradeceríamos leer detenidamente la Carta de Compromiso y luego dar click en el espacio de aceptación de la misma. -->
                    </p>
                </div>
            </div><!--end .card-body -->
            <div class="card-body col-md-12" align="left" style="font-size: 14px;margin-left: 32px;;padding-bottom: 0px;">
                <label class="checkbox-inline checkbox-styled check" align="center">
                    <input type="checkbox" id="carta-check" value="1" name="Carta[check]" <?= ($model->check==1)?'checked':'' ?> <?= ($etapa4->estado==1)?'disabled':''  ?>><span>Confirmo que la información registrada es verdadera y acepto el compromiso adquirido.</span>
                </label>
            </div>
            <div class="card-body col-md-12" style="font-size: 14px;padding-top: 0px;margin-left: 32px;padding-bottom: 0px">
                <!--<b>Nota:</b><i>Se realizará una selección de solo 1000 docentes participantes en el curso.</i>-->
            </div>
            <div class="card-body col-md-12" align="center" >
                <?php if($etapa4->estado==0){ ?>
                <button id="registrar" style="font-size: 13px;" type="submit" class="btn boton">Aceptar compromiso</button>
                <?php  } ?>
            </div>
            <div class="clearfix"></div>
            
            <?php ActiveForm::end(); ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    $('#registrar').click(function(){
        
        var error="";
	var p1=$('input[name=\'Carta[check]\']:checked').length;
        
	if (p1==0) {
            error=error+'Debes de seleccionar, aceptar compromiso <br>';
            $('.check').addClass('has-error');
        }
        else
        {
            $('.check').addClass('has-success');
            $('.check').removeClass('has-error');
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
        //$("#w0").submit();
    });
</script>