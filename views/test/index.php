
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<style>
.modal-backdrop.in
{
    opacity:0 !important;
}
.modal-dialog
{
    width: 300px;
    display: inline-block;
    margin: 0px auto;
    position: fixed;
    transition: all 0.5s ease-in-out;
    z-index: 1000000;
    bottom: 47px;
    right: 20px; animation-iteration-count: 1;
    font-size: 15px;
    /* To center horizontally */
}
</style>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/modal/bootbox.min.js"></script>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card " style="width: 643px">
            <div class="row pie" ></div>
            <div class="row cabecera"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-head text-left" >
                        <header  style="color: #1F8DCC;padding-left: 30px">Encuesta acerca de entornos virtuales</header>
                    </div><!--end .card-head -->
                    <div class="card-head text-justify" style="line-height:16px;padding-left: 30px;padding-right: 30px;color:#8C8C8C;font-size: 16px;">
                        En esta etapa requerimos conocer su grado de familiarización con respecto a entornos virtuales y uso de tecnologías. Para ello pedimos responda honestamente a la siguiente encuesta:
                    </div>
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form floating-label','enctype'=>'multipart/form-data','style'=>'color:#8C8C8C'],]); ?>
                    <input type="hidden" name="Documento[persona_id]" value="<?= $model->persona_id ?>">
                    <div class="card-body " style="padding-top: 0px;padding-left: 18px;padding-right: 18px;">
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p1 " >
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;">1.-¿Ha ingresado en algún momento al espacio Aulas Virtuales de Perú EDUCA?</label>
                                <div class="form-group" >
                                    <div class="radio radio-styled " >
                                        <label>
                                            <input type="radio" name="Test[p1]" value="1" <?= ($model->p1==1)?'checked':''  ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Si</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p1]" value="0" <?= ($model->p1==0)?'checked':''  ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p2">
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;">2.-¿Cuántos de los siguientes prerrequisitos cumple?</label>
                                <div class="form-group">
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p2_1]" <?= ($model->p2_1==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Uso de Internet</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p2_2]" <?= ($model->p2_2==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Experiencia en cursos virtuales como participante o tutor</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p2_3]" <?= ($model->p2_3==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Facilidad para el trabajo en equipo bajo la modalidad de chat y/o foros</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p3">
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;">3.-¿Cuántos de los siguientes servicios maneja con fluidez?</label>
                                <div class="form-group">
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p3_1]" <?= ($model->p3_1==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Correo electrónico</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p3_2]" <?= ($model->p3_2==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Uso de Dropox, OneDrive, Google Drive</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p3_2]" <?= ($model->p3_2==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Documentos compartidos</span>
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-styled">
                                        <label>
                                            <input type="checkbox" value="1" name="Test[p3_4]" <?= ($model->p3_4==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Chat/videoconferencia</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p4">
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;">4.-¿Con qué frecuencia se conecta a internet?</label>
                                <div class="form-group">
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p4]" value="1" <?= ($model->p4==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Varias veces al día</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p4]" value="2" <?= ($model->p4==2)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Dos o tres veces por semana</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p4]" value="3" <?= ($model->p4==3)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Una vez a la semana</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p4]" value="4" <?= ($model->p4==4)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Menos de una vez al mes</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p5">
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;">5.-¿Cómo ha desarrollado sus conocimientos de manejo y uso de tecnologías?</label>
                                <div class="form-group">
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p5]" value="1" <?= ($model->p5==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Por cursos y talleres de mi IE y/o UGEL - DRE - MED</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p5]" value="2" <?= ($model->p5==2)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Investigando y probando por interés propio</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p5]" value="3" <?= ($model->p5==3)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Con la ayuda de otros colegas</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p5]" value="4" <?= ($model->p5==4)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Mis conocimientos aún son muy limitados</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="form-group p6">
                                <label style="font-size: 14px;background: #EEF3FB;width: 100%;color:#8C8C8C !important;font-size: 16px;" >6.-¿Cuántas horas semanales podría dedicarle al desarrollo del curso sin afectar otras actividades profesionales y familiares?</label>
                                <div class="clearfix"></div><br>
                                <div class="form-group">
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p6]" value="1" <?= ($model->p6==1)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>8 a más</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p6]" value="2" <?= ($model->p6==2)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Entre 5 y 7</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p6]" value="3" <?= ($model->p6==3)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Entre 3 a 5</span>
                                        </label>
                                    </div>
                                    <div class="radio radio-styled">
                                        <label>
                                            <input type="radio" name="Test[p6]" value="4" <?= ($model->p6==4)?'checked':'' ?> <?= ($etapa3->estado==1)?'disabled':''  ?>>
                                            <span>Una a dos</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <?php if($etapa3->estado==0){ ?>
                            <div class="pull-left ">
                                <?= Html::a("<< Retroceder",['documento/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <div class="pull-right" >
                                <input type="hidden" id="etapa" name="etapa" value="0">
                                <button type="submit" class="btn boton">Guardar</button>
                                <button type="button" id="registrar" name="y01" class="btn boton">Continuar >></button><br><br>
                            </div>
                            <?php }else{ ?>
                            <div class="pull-left ">
                                <?= Html::a("<< Retroceder",['documento/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <div class="pull-right ">
                                <?= Html::a("Continuar >>",['carta/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end .card-body -->
                    
                    <?php ActiveForm::end(); ?>
                    <div class="clearfix"></div>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card -->
    </div>
</div><!--end .col -->
<div class="clearfix"></div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $('#registrar').click(function(){
        var error="";
        var p1=$('input[name=\'Test[p1]\']:checked').length;
        
        var p2_1=$('input[name=\'Test[p2_1]\']:checked').length;
        var p2_2=$('input[name=\'Test[p2_2]\']:checked').length;
        var p2_3=$('input[name=\'Test[p2_3]\']:checked').length;
        var p2=p2_1+p2_2+p2_3;
        
        var p3_1=$('input[name=\'Test[p3_1]\']:checked').length;
        var p3_2=$('input[name=\'Test[p3_2]\']:checked').length;
        var p3_3=$('input[name=\'Test[p3_3]\']:checked').length;
        var p3_4=$('input[name=\'Test[p3_4]\']:checked').length;
        var p3=p3_1+p3_2+p3_3+p3_4;
        
        var p4=$('input[name=\'Test[p4]\']:checked').length;
        var p5=$('input[name=\'Test[p5]\']:checked').length;
        var p6=$('input[name=\'Test[p6]\']:checked').length;
        
        if (p1==0) {
            error=error+'Usted debe seleccionar la 1era pregunta <br>';
            $('.p1').addClass('has-error');
        }
        else
        {
            $('.p1').addClass('has-success');
            $('.p1').removeClass('has-error');
        }
        
        if (p2==0) {
            error=error+'Usted debe seleccionar la 2da pregunta <br>';
            $('.p2').addClass('has-error');
        }
        else
        {
            $('.p2').addClass('has-success');
            $('.p2').removeClass('has-error');
        }
        
        if (p3==0) {
            error=error+'Usted debe seleccionar la 3era pregunta <br>';
            $('.p3').addClass('has-error');
        }
        else
        {
            $('.p3').addClass('has-success');
            $('.p3').removeClass('has-error');
        }
        
        if (p4==0) {
            error=error+'Usted debe seleccionar la 4ta pregunta <br>';
            $('.p4').addClass('has-error');
        }
        else
        {
            $('.p4').addClass('has-success');
            $('.p4').removeClass('has-error');
        }
        
        if (p5==0) {
            error=error+'Usted debe seleccionar la 5ta pregunta <br>';
            $('.p5').addClass('has-error');
        }
        else
        {
            $('.p5').addClass('has-success');
            $('.p5').removeClass('has-error');
        }
        
        if (p6==0) {
            error=error+'Usted debe seleccionar la 6ta pregunta <br>';
            $('.p6').addClass('has-error');
        }
        else
        {
            $('.p6').addClass('has-success');
            $('.p6').removeClass('has-error');
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
            bootbox.confirm({
                message:"¿Está seguro de haber completado la encuesta?<br>Si presionas continuar no podrás modificar la encuesta.",
                buttons: {
                    'cancel': {
                        label: 'Cancelar',
                        className: "boton",
                    },
                    'confirm': {
                        label: 'Continuar',
                        className: "boton",
                    }
                },
                callback: function(result) {
                    if (result) {
                        $("#etapa").val("1");
                        $("#w0").submit();
                    }
                }
            });
           //return true;
        }
        
        
    });
    
</script>