<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<style>
    input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 0px 12px;
    cursor: pointer;
    width: 120px;
}
.modal-backdrop.in
{
    opacity:0 !important;
}
.modal-dialog
{
    width: 320px;
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

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
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
                    <div class="card-head">
                        <header style="color: #1F8DCC;padding-left: 30px;">Documentos</header>
                    </div><!--end .card-head -->
                    <div class="card-head text-justify" style="line-height:16px;padding-left: 30px;padding-right: 30px;color:#8C8C8C;font-size: 16px;">
                            En cada campo, solo podrá subir un (1) documento que no exceda en tamaño a 5 MB. Es importante que la documentación subida sea legible.<br><br>
                                <ul>
                                    <li>Para poder subir un documento, deberá hacer click en el botón “Seleccionar”.</li>
                                    <li>Para revisar el documento registrado, haga click en la opción “Ver”.</li>
                                    <li>Si quiere reemplazar un documento registrado, haga click en la opción "Borrar" y vuelva a seleccionar el documento.</li>
                                    <li>Si cuenta con todos los documentos a la mano, proceda a subirlos ahora; de lo contrario, suba de los que disponga. Luego podrá ingresar nuevamente a esta página con su usuario y contraseña.</li>
                                </ul>
                            
                    </div>
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'form','enctype'=>'multipart/form-data'],]); ?>
                   
                    
                    <div class="clearfix"></div>
                    <input type="hidden" name="Documento[persona_id]" value="<?= $model->persona_id ?>">
                    <div class="card-body" style="padding-left: 30px;padding-right: 30px;">
                        <div class="clearfix"></div>
                        <table class="table table-bordered">
                                <tr class="subtitulos">
                                    <td colspan="3" style="font-size: 16px;">Documento</td>
                                </tr>
                                <tr>
                                    <td align="center" style="width: 60px;vertical-align:middle !important;" ><span  class="<?= ($model->archivo1!=""?"check":"warning")?>"></span>   </td>
                                    <td class="letras" style="vertical-align:middle;font-size: 16px;">Copia simple de DNI.</td>
                                    <td class="col-md-4" align="center" style="vertical-align:middle">
                                        <div class="col-md-12 pull-left" style="padding-bottom: 5px">
                                            <?php if($model->archivo1==""){ ?>
                                            <label class="custom-file-upload btn file1 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                <input type="file" id="file1" name="Documento[file1]" onchange="Archivo(this)">
                                                <i class="md md-file-upload "></i> <span class="f1">Seleccionar </span>  
                                            </label>
                                            <?php }else{?>
                                                <label class="custom-file-upload btn delete1 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                    <i class="md md-delete "></i> <span class="f1">Borrar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12 ">
                                            <?php if($model->archivo1!=""){ ?>
                                                <?= Html::a("<i class='md md-file-download'></i> Ver&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",[($model->archivo1!="")?'/documentos1/'.$model->archivo1:'#'],['class'=>'btn custom-file-upload boton ','target'=>'_blank','style'=>'font-size:14px']);?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="width: 60px;vertical-align:middle !important;"><span class="md <?= ($model->archivo2!=""?"check":"warning")?>"></span></td>
                                    <td class="letras" style="vertical-align:middle;font-size: 16px;">Copia simple de título o contancia que acredite ser profesional o bachiller en Educación.</td>
                                    <td class="col-md-4" align="center" style="vertical-align:middle">
                                        <div class="col-md-12 pull-left" style="padding-bottom: 5px">
                                            <?php if($model->archivo2==""){ ?>
                                            <label class="custom-file-upload btn file2 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                <input type="file" id="file2" name="Documento[file2]" onchange="Archivo(this)">
                                                <i class="md md-file-upload "></i> <span class="f2" >Seleccionar </span>  
                                            </label>
                                            <?php }else{?>
                                                <label class="custom-file-upload btn delete2 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                    <i class="md md-delete "></i> <span class="f2" >Borrar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                </label>
                                            <?php } ?>
                                            
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <?php if($model->archivo2!=""){ ?>
                                                <?= Html::a("<i class='md md-file-download'></i> Ver&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",[($model->archivo2!="")?'/documentos2/'.$model->archivo2:'#'],['class'=>'btn custom-file-upload boton','target'=>'_blank','style'=>'font-size:14px']);?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="width: 60px;vertical-align:middle !important;"><span class="md <?= ($model->archivo3!=""?"check":"warning")?>"></span></td>
                                    <td class="letras" style="vertical-align:middle;font-size: 16px;">Copia simple de título o constancia o certificado que acredite estudios o especialización en enseñanza del idioma inglés.</td>
                                    <td class="col-md-4" align="center" style="vertical-align:middle">
                                        <div class="col-md-12 pull-left" style="padding-bottom: 5px">
                                            <?php if($model->archivo3==""){ ?>
                                            <label class="custom-file-upload btn file3 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                <input type="file" id="file3" name="Documento[file3]" onchange="Archivo(this)">
                                                <i class="md md-file-upload "></i> <span class="f3">Seleccionar </span>  
                                            </label>
                                            <?php }else{?>
                                                <label class="custom-file-upload btn delete3 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                    <i class="md md-delete "></i> <span class="f3">Borrar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php if($model->archivo3!=""){ ?>
                                                <?= Html::a("<i class='md md-file-download'></i> Ver&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",[($model->archivo3!="")?'/documentos3/'.$model->archivo3:'#'],['class'=>'btn custom-file-upload boton','target'=>'_blank','style'=>'font-size:14px']);?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="width: 60px;vertical-align:middle !important;"><span class="md <?= ($model->archivo4!=""?"check":"warning")?>"></span></td>
                                    <td class="letras" style="vertical-align:middle;font-size: 16px;">Copia simple de resoluciones o contratos o constancias que acrediten trabajo como docente de Institución Educativa Pública. </td>
                                    <td class="col-md-4" align="center" style="vertical-align:middle">
                                        <div class="col-md-12 pull-left" style="padding-bottom: 5px">
                                            <?php if($model->archivo4==""){ ?>
                                            <label class="custom-file-upload btn file4 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                <input type="file" id="file4" name="Documento[file4]" onchange="Archivo(this)">
                                                <i class="md md-file-upload "></i> <span class="f4">Seleccionar </span>  
                                            </label>
                                            <?php }else{?>
                                                <label class="custom-file-upload btn delete4 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                    <i class="md md-delete "></i> <span class="f4">Borrar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php if($model->archivo4!=""){ ?>
                                                <?= Html::a("<i class='md md-file-download'></i> Ver&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",[($model->archivo4!="")?'/documentos4/'.$model->archivo4:'#'],['class'=>'btn custom-file-upload boton','target'=>'_blank','style'=>'font-size:14px']);?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="width: 60px;vertical-align:middle !important;"><span class="md <?= ($model->archivo5!=""?"check":"warning")?>"></span></td>
                                    <td class="letras" style="vertical-align:middle;font-size: 16px;">Copia simple de certificado o constancia que acredite poseer como mínimo el nivel de suficiencia de inglés intermedio o B1.</td>
                                    <td class="col-md-4" align="center" style="vertical-align:middle">
                                        <div class="col-md-12 pull-left" style="padding-bottom: 5px">
                                            <?php if($model->archivo5==""){ ?>
                                            <label class="custom-file-upload btn file5 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                <input type="file" id="file5" name="Documento[file5]" onchange="Archivo(this)">
                                                <i class="md md-file-upload "></i> <span class="f5">Seleccionar </span>  
                                            </label>
                                            <?php }else{?>
                                                <label class="custom-file-upload btn delete5 boton_cargar" <?= ($etapa2->estado==0)?'':'disabled' ?> style="font-size: 14px;">
                                                    <i class="md md-delete "></i> <span class="f5">Borrar&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                                </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-12">
                                            <?php if($model->archivo5!=""){ ?>
                                                <?= Html::a("<i class='md md-file-download'></i> Ver&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",[($model->archivo5!="")?'/documentos5/'.$model->archivo5:'#'],['class'=>'btn custom-file-upload boton','target'=>'_blank','style'=>'font-size:14px']);?>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                        <div class="col-md-12">
                            <?php if($etapa2->estado==0){ ?>
                            <div class="pull-left ">
                                <?= Html::a("<< Retroceder",['persona/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <div class="pull-right ">
                                <input type="hidden" id="etapa" name="etapa" value="0">
                                <!--<button type="submit" id="registrar" name="y01" class="btn boton">Continuar >></button><br><br>-->
                                <button type="button" id="registrar"  class="btn boton">Continuar >></button><br><br>
                            </div>
                            <?php }else{ ?>
                            <div class="pull-left ">
                                <?= Html::a("<< Retroceder",['persona/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <div class="pull-right ">
                                <?= Html::a("Continuar >>",['test/index'],['class'=>'btn text-center boton']);?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end .card-body -->
                    <!-- Modal -->
                    <!-- Button trigger modal -->

                    
                    <?php ActiveForm::end(); ?>
                </div><!--end .col -->
            </div><!--end .row -->
            
        </div><!--end .card -->
    </div>
</div><!--end .col -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
<?php
$eliminararchivo1= Yii::$app->getUrlManager()->createUrl('documento/eliminararchivo1');
$eliminararchivo2= Yii::$app->getUrlManager()->createUrl('documento/eliminararchivo2');
$eliminararchivo3= Yii::$app->getUrlManager()->createUrl('documento/eliminararchivo3');
$eliminararchivo4= Yii::$app->getUrlManager()->createUrl('documento/eliminararchivo4');
$eliminararchivo5= Yii::$app->getUrlManager()->createUrl('documento/eliminararchivo5');
$finalizardocumento= Yii::$app->getUrlManager()->createUrl('documento/finalizar-documento');
?>
<script>
    
    $('.delete1').click(function(){
        $.ajax({
            url: '<?= $eliminararchivo1 ?>',
            type: 'POST',
            async: true,
            data: {'id':"<?= $model->id ?>"},
            success: function(data){
                $.notify({
                    message: 'Se ha eliminado el documento n° 1' 
                },{
                    type: 'success',
                    z_index: 1000000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                });
                
                setTimeout(function(){
                                    window.location.reload(1);
                                }, 2000); 
            }
        });
    });
    
    $('.delete2').click(function(){
        $.ajax({
            url: '<?= $eliminararchivo2 ?>',
            type: 'POST',
            async: true,
            data: {'id':"<?= $model->id ?>"},
            success: function(data){
                $.notify({
                    message: 'Se ha eliminado el documento n° 2' 
                },{
                    type: 'success',
                    z_index: 1000000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                });
                
                setTimeout(function(){
                                    window.location.reload(1);
                                }, 2000); 
            }
        });
    });
    
    $('.delete3').click(function(){
        $.ajax({
            url: '<?= $eliminararchivo3 ?>',
            type: 'POST',
            async: true,
            data: {'id':"<?= $model->id ?>"},
            success: function(data){
                $.notify({
                    message: 'Se ha eliminado el documento n° 3' 
                },{
                    type: 'success',
                    z_index: 1000000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                });
                
                setTimeout(function(){
                                    window.location.reload(1);
                                }, 2000); 
            }
        });
    });
    
    $('.delete4').click(function(){
        $.ajax({
            url: '<?= $eliminararchivo4 ?>',
            type: 'POST',
            async: true,
            data: {'id':"<?= $model->id ?>"},
            success: function(data){
                $.notify({
                    message: 'Se ha eliminado el documento n° 4' 
                },{
                    type: 'success',
                    z_index: 1000000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                });
                
                setTimeout(function(){
                                    window.location.reload(1);
                                }, 2000); 
            }
        });
    });
    
    $('.delete5').click(function(){
        $.ajax({
            url: '<?= $eliminararchivo5 ?>',
            type: 'POST',
            async: true,
            data: {'id':"<?= $model->id ?>"},
            success: function(data){
                $.notify({
                    message: 'Se ha eliminado el documento n° 5' 
                },{
                    type: 'success',
                    z_index: 1000000,
                    placement: {
                        from: 'bottom',
                        align: 'right'
                    },
                });
                
                setTimeout(function(){
                                    window.location.reload(1);
                                }, 2000); 
            }
        });
    });
    
        $('#registrar').click(function(){
            var error="";
            var file1="<?= $model->archivo1 ?>";
            var file2="<?= $model->archivo2 ?>";
            var file3="<?= $model->archivo3 ?>";
            var file4="<?= $model->archivo4 ?>";
            var file5="<?= $model->archivo5 ?>";
            
            if (file1=='') {
                error=error+'Usted debe seleccionar su documento n° 1 <br>';
                $('.file1').addClass('has-error');
            }
            else
            {
                $('.file1').addClass('has-success');
                $('.file1').removeClass('has-error');
            }
            
            if (file2=='') {
                error=error+'Usted debe seleccionar su documento n° 2 <br>';
                $('.file2').addClass('has-error');
            }
            else
            {
                $('.file2').addClass('has-success');
                $('.file2').removeClass('has-error');
            }
            
            if (file3=='') {
                error=error+'Usted debe seleccionar su documento n° 3 <br>';
                $('.file3').addClass('has-error');
            }
            else
            {
                $('.file3').addClass('has-success');
                $('.file3').removeClass('has-error');
            }
            
            if (file4=='') {
                error=error+'Usted debe seleccionar su documento n° 4 <br>';
                $('.file4').addClass('has-error');
            }
            else
            {
                $('.file4').addClass('has-success');
                $('.file4').removeClass('has-error');
            }
            
            if (file5=='') {
                error=error+'Usted debe seleccionar su documento n° 5 <br>';
                $('.file5').addClass('has-error');
            }
            else
            {
                $('.file5').addClass('has-success');
                $('.file5').removeClass('has-error');
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
                    message:"¿Está seguro de haber completado el registro?<br>Si presionas continuar no podrás modificar los archivos subidos.",
                    buttons: {
                        'confirm': {
                            label: 'Continuar',
                            className: "boton",
                        },
                        'cancel': {
                            label: 'Cancelar',
                            className: "boton",
                        }
                    },
                    callback: function(result) {
                        if (result) {
                            /*$.post( "<?php //= $finalizardocumento ?>", { 'id':<?php //= $model->id ?>})
                            .done(function( data ) {
                                
                            });
                            */
                            $("#etapa").val("1");
                            $("#w0").submit();
                        }
                    }
                });
                //$("#aa").modal("show");
                /*bootbox.confirm("¿Está seguro que los documentos adjuntos son correctos?", function(result) {
                    console.log(result);
                    if (result == true) {                                             
                        console.log("a");
                    } else {
                        console.log("b");
                    }
                }); */
                
                
            }
        });
    function Archivo(elemento) {
        var ext = $(elemento).val().split('.').pop().toLowerCase();
        var error='';
        
        if($.inArray(ext, ['pdf']) == -1) {
            error=error+'El documento seleccionado debe estar en el formato .PDF';
        }
        if (error=='' && elemento.files[0].size/1024/1024>=5) {
            error=error+'El documento seleccionado debe ser menor o igual a 5MB';
        }
        
        if (error!='') {
            $.notify({
                message: error
            },{
                // settings
                type: 'danger',
                z_index: 1000000,
                placement: {
                        from: 'bottom',
                        align: 'right'
                },
            });
            $(elemento).val('');
            return false;
        }
        else
        {
            $("#w0").submit();
            return true;
        }
    }
</script>