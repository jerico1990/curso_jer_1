<?php
use app\models\Ubigeo ;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/notify/bootstrap-notify.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<div class="section-body contain-lg">
    
    <div class="row">
	<!-- BEGIN ADD CONTACTS FORM -->
	<div class="col-md-3 "></div>
	<div class="col-md-6 ">
	    <?php if (Yii::$app->session->hasFlash('registrado')): ?>
	    <div class="card " style="width: 643px;background: #F1F1F1" >
		<div class="card-head text-center pie" ></div>
		<div class="card-head text-center cabecera" ></div>
		<div class="card-head text-center " style="color: red;">
		    <h2>¡Gracias por registrarte!</h2>
		</div>
		<div class="card-head " style="line-height:16px">
		    <div class="col-md-12 text-center" style="color:#8C8C8C;padding-left: 30px;padding-right: 30px">
			<h3>Tu usuario y contraseña han sido <br>enviados a tu correo electrónico</h3>
		    </div>
		</div>
		<div class="card-body tab-content text-center" align="center">
		    <?= Html::a("Gracias",['login/index'],['class'=>'btn text-center boton_gracias','style'=>'font-size:16px;width:150px;']);?>
		</div>
		<div class="clearfix"></div>
		
	    </div>
	    <?php else: ?>
	    <div class="card " style="width: 643px">
		<div class="card-head text-center pie" ></div>
		<div class="card-head text-center cabecera" ></div>
		<div class="card-head text-center " style="color: red;">
			<h1 style="font-family: 'YanoneKaffeesatzBold' !important">REGISTRO DE PARTICIPANTES</h1>
		</div>
		<div class="card-head " style="line-height:16px">
		    <div class="col-md-12 text-justify" style="color:#8C8C8C;padding-left: 30px;padding-right: 30px;font-size: 16px">
			Gracias por su interés en participar del CURSO VIRTUAL METODOLOGÍA DE INGLÉS
			Para realizar su inscripción deberá completar los cuatro pasos del presente registro. Recuerde leer las instrucciones cuidadosamente para evitar confusiones y demoras.
			En caso de consultas o dudas, por favor contactar a equipoinglesjer@perueduca.pe
		    </div>
		</div>
		<?php $form = ActiveForm::begin([
		    'options' => ['class' => 'form'],
		]); ?>

		    <!-- BEGIN DEFAULT FORM ITEMS -->
		    

		    <!-- BEGIN FORM TABS -->
		    <div class="card-head">
			<ul class="nav nav-tabs tabs-text-contrast tabs-accent subtitulos" data-toggle="tabs" style="padding-left: 0px">
			    <li class="active"><a href="#contact" style="border: 0px solid white;font-size: 16px">Datos personales</a></li>
			</ul>
		    </div><!--end .card-head -->
		    <!-- END FORM TABS -->

		    <!-- BEGIN FORM TAB PANES -->
		    <div class="card-body tab-content" style="padding-top: 0px;margin-left: 30px !important;margin-right: 30px !important;padding-left: 0px">
			<div class="tab-pane active" id="contact">
			    <div class="row">
				<div class="col-md-12">
				    <div class="row">
					<div class="col-md-4">
					    <div class="form-group nombres">
						<input  type="text" class="form-control texto" id="persona-nombres" name="Persona[nombres]" maxlength="50">
						<label for="nombres" style="font-size: 16px">Nombres</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group  paterno">
						<input type="text" class="form-control texto" id="persona-paterno" name="Persona[paterno]" maxlength="50">
						<label for="paterno" style="font-size: 16px">Apellido paterno</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group  materno">
						<input type="text" class="form-control texto" id="persona-materno" name="Persona[materno]" maxlength="50">
						<label for="materno" style="font-size: 16px">Apellido materno</label>
					    </div>
					</div><!--end .col -->
				    </div><!--end .row -->
				    <div class="row">
					<div class="col-md-4">
					    <div class="form-group  tipo_documento">
						<!--<input type="text" class="form-control numerico" id="persona-nro_documento" name="Persona[nro_documento]" maxlength="8">-->
						
						<select class="form-control" id="persona-tipo_documento" name="Persona[tipo_documento]">
						    <option value></option>
						    <option value=1>DNI</option>
						    <option value=2>CARNET DE EXTRANJERIA</option>
						    <option value=3>PASAPORTE</option>
						</select>
						<label for="nro_documento" style="font-size: 16px">Tipo de documento</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group  nro_documento">
						<input type="text" class="form-control numerico" id="persona-nro_documento" name="Persona[nro_documento]" maxlength="8">
						<label for="nro_documento" style="font-size: 16px">Nro de documento</label>
					    </div>
					</div><!--end .col -->
				    </div><!--end .row -->
				    <div class="row">
					<div class="col-md-4">
					    <div class="form-group  email">
						<input type="email" class="form-control" id="persona-correo_electronico" name="Persona[correo_electronico]" maxlength="50">
						<label for="email" style="font-size: 16px">Email</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group celular">
						<input type="text" class="form-control numerico" id="persona-celular" name="Persona[celular]"  maxlength="11">
						<label for="celular" style="font-size: 16px">Teléfono celular</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group telefono">
						<input type="text" class="form-control numerico" id="persona-telefono" name="Persona[telefono]"  maxlength="11">
						<label for="telefono" style="font-size: 16px">Teléfono de casa</label>
					    </div>
					</div><!--end .col -->
				    </div><!--end .row -->
				    <div class="row">
					<div class="col-md-4">
					    <div class="form-group  clave">
						<input type="password" class="form-control" id="persona-clave" name="Persona[clave]" maxlength="30">
						<label for="clave" style="font-size: 16px">Contraseña</label>
					    </div>
					</div><!--end .col -->
					<div class="col-md-4">
					    <div class="form-group reclave">
						<input type="password" class="form-control" id="persona-reclave" name="Persona[reclave]"  maxlength="30">
						<label for="reclave" style="font-size: 16px">Repetir contraseña</label>
					    </div>
					</div><!--end .col -->
				    </div>
				</div><!--end .col -->
			    </div><!--end .row -->
			</div><!--end .tab-pane -->
		    </div><!--end .card-body.tab-content -->
		    <!-- END FORM TAB PANES -->
		    <!-- BEGIN FORM TABS -->
		    <div class="card-head ">
			<ul class="nav nav-tabs tabs-text-contrast tabs-accent subtitulos" data-toggle="tabs" style="padding-left: 0px;">
			    <li class="active"><a href="#contact" style="border: 0px solid white;font-size: 16px">Información laboral</a></li>
			</ul>
		    </div><!--end .card-head -->
		    <!-- END FORM TABS -->
		    <!-- BEGIN FORM TAB PANES -->
		    <div class="card-body tab-content" style="padding-top: 0px;margin-left: 30px !important;margin-right: 30px !important;padding-left: 0px">
			<div class="tab-pane active" id="contact">
			    <div class="row">
				<div class="col-md-4">
				    <div class="form-group departamento required" >
					
					<select id="persona-departamento" class="form-control" name="Persona[departamento]" onchange='departamento($(this).val())'>
					<option value=""></option>
					<?php foreach(Ubigeo::find()->select('department_id,department')->groupBy('department')->all() as $departamento){ ?>
					<option value="<?= $departamento->department_id ?>"><?= $departamento->department ?></option>
					<?php } ?>
					</select>
					<label class="control-label" for="persona-departamento" style="font-size: 16px">Región</label>
				    </div>
				</div>
				<div class="col-md-4">
				    <div class="form-group provincia required" >
					<select  id="persona-provincia" class="form-control" name="Persona[provincia]" onchange='provincia($(this).val())'>
					<option value=""></option>
					</select>
					<label class="control-label" for="persona-provincia" style="font-size: 16px">Provincia</label>
				    </div>
				</div>
				<div class="col-md-4">
				    <div class="form-group distrito required " >
					<select id="persona-distrito" class="form-control" name="Persona[distrito]" onchange='distrito($(this).val())'>
					    <option value=""></option>
					</select>
					<label class="control-label" for="persona-distrito" style="font-size: 16px">Distrito</label>
				    </div>
				</div>
			    </div><!--end .row -->
			    <div class="row">
				<div class="col-md-6">
				    <div class="form-group  institucion_id required" style="margin-top: 15px">
					<select id="persona-institucion_id" class="form-control" name="Persona[institucion_id]">
					    <option value=""></option>
					</select>
					<label class="control-label" for="persona-institucion_id" style="font-size: 16px">Institución Educativa</label>
				    </div>
				</div>
			    </div>
			</div><!--end .tab-pane -->
		    </div><!--end .card-body.tab-content -->
		    <!-- END FORM TAB PANES -->
		    
		    
		    
		    <!-- BEGIN FORM FOOTER -->
		    <div class="card-actionbar">
			<div class="card-actionbar-row pull-left ">
			    <?= Html::a("<< Regresar",['login/index'],['class'=>'btn text-center boton']);?>
			</div>
			<div class="card-actionbar-row pull-right ">
			    <button id="registrar" type="submit" class="btn boton" >Registrarme</button>
			</div><!--end .card-actionbar-row -->
		    </div><!--end .card-actionbar -->
		    <!-- END FORM FOOTER -->
		
		<?php ActiveForm::end(); ?>
		
	    </div><!--end .card -->
	    <?php endif; ?>
	    
	    
	    
	</div><!--end .col -->
	<!-- END ADD CONTACTS FORM -->

    </div><!--end .row -->
</div><!--end .section-body -->
				
<!-- END CONTENT -->
<script type="text/html" id="experienceTmpl">
    <li class="clearfix">
	<div class="page-header no-border holder">
	    <a class="btn btn-icon-toggle btn-accent btn-delete stick-top-right"><span class="md md-delete"></span></a>
	    <h4 class="text-accent">Experience <%=index%></h4>
	</div>
	<div class="row">
	    <div class="col-sm-4">
		<div class="form-group">
		    <input type="text" class="form-control" id="experience-company-<%=index%>" name="experience-company-<%=index%>">
		    <label for="experience-company-<%=index%>">Company</label>
		</div>
	    </div>
	    <div class="col-sm-4">
		<div class="form-group">
		    <input type="text" class="form-control" id="experience-functiontitle-<%=index%>" name="experience-functiontitle-<%=index%>">
		    <label for="experience-functiontitle-<%=index%>">Function</label>
		</div>
	    </div>
	    <div class="col-sm-4">
		<div class="form-group">
		    <div class="input-daterange input-group" id="demo-date-range">
			<div class="input-group-content">
			    <input type="text" class="form-control" name="start<%=index%>" />
			    <label>Date range</label>
			</div>
			<span class="input-group-addon">to</span>
			<div class="input-group-content">
			    <input type="text" class="form-control" name="end<%=index%>" />
			    <div class="form-control-line"></div>
			</div>
		    </div>
		</div>
	    </div>
	</div>
	<div class="form-group">
	    <textarea name="experience-description-<%=index%>" id="experience-description-<%=index%>" class="form-control" rows="3"></textarea>
	    <label for="experience-description-<%=index%>">Job description</label>
	</div>
    </li>
</script>
<script type="text/html" id="skillTmpl">
    <li class="clearfix">
	<div class="row">
	    <div class="col-xs-8">
		<div class="form-group">
		    <input type="text" class="form-control" id="skill-<%=index%>" name="skill-<%=index%>">
		    <label for="skill-<%=index%>">Skill <%=index%></label>
		</div>
	    </div>
	    <div class="col-xs-4">
		<div class="form-group">
		    <select name="skill-rating-<%=index%>" class="form-control">
			<option value=""></option>
			<option value="100">100</option>
			<option value="90">90</option>
			<option value="80">80</option>
			<option value="70">70</option>
			<option value="60">60</option>
			<option value="50">50</option>
			<option value="40">40</option>
			<option value="30">30</option>
			<option value="20">20</option>
			<option value="10">10</option>
		    </select>
		    <label for="skill-rating-<%=index%>">Rating</label>
		</div>
	    </div>
	</div>
    </li>
</script>
<?php
    $dni= Yii::$app->getUrlManager()->createUrl('registrar/dni');
    $email= Yii::$app->getUrlManager()->createUrl('registrar/email');
    $codigo= Yii::$app->getUrlManager()->createUrl('registrar/codigo');
    
    $provincias= Yii::$app->getUrlManager()->createUrl('ubigeo/provincias');
    $distritos= Yii::$app->getUrlManager()->createUrl('ubigeo/distritos');
    $instituciones= Yii::$app->getUrlManager()->createUrl('ubigeo/instituciones');
?>

<script>
    $('#registrar').click(function(){
	var error="";
	
	if ($('#persona-nombres').val()=='') {
            error=error+'Usted debe ingresar su nombre completo <br>';
            $('.nombres').addClass('has-error');
        }
        else
        {
            $('.nombres').addClass('has-success');
            $('.nombres').removeClass('has-error');
        }
	
	if ($('#persona-paterno').val()=='') {
            error=error+'Usted debe ingresar su apellido paterno <br>';
            $('.paterno').addClass('has-error');
        }
        else
        {
            $('.paterno').addClass('has-success');
            $('.paterno').removeClass('has-error');
        }
	
	if ($('#persona-materno').val()=='') {
            error=error+'Usted debe ingresar su apellido materno <br>';
            $('.materno').addClass('has-error');
        }
        else
        {
            $('.materno').addClass('has-success');
            $('.materno').removeClass('has-error');
        }
	
	if ($('#persona-nro_documento').val()=='') {
            error=error+'Usted debe ingresar su nro de documento <br>';
            $('.nro_documento').addClass('has-error');
        }
        else
        {
            $('.nro_documento').addClass('has-success');
            $('.nro_documento').removeClass('has-error');
        }
	
	if ($('#persona-correo_electronico').val()=='') {
            error=error+'Usted debe ingresar su correo electrónico <br>';
            $('.email').addClass('has-error');
        }
        else
        {
            $('.email').addClass('has-success');
            $('.email').removeClass('has-error');
        }
	
	if ($('#persona-clave').val()=='') {
            error=error+'Usted debe ingresar su contraseña <br>';
            $('.clave').addClass('has-error');
        }
        else
        {
            $('.clave').addClass('has-success');
            $('.clave').removeClass('has-error');
        }
	
	
	if ($('#persona-reclave').val()=='') {
            error=error+'Usted debe ingresar su contraseña repetida <br>';
            $('.reclave').addClass('has-error');
        }
        else
        {
            $('.reclave').addClass('has-success');
            $('.reclave').removeClass('has-error');
        }
	
	
	if ($('#persona-clave').val()!='' && $('#persona-clave').val().length<6) {
            error=error+'Usted debe ingresar su contraseña con mínimo 6 caracteres<br>';
            $('.clave').addClass('has-error');
        }
        else
        {
            $('.clave').addClass('has-success');
            $('.clave').removeClass('has-error');
        }
	
	
	
	if ($('#persona-clave').val()!='' && $('#persona-reclave').val()!='' && $('#persona-clave').val().length>=6) {
	    if ($('#persona-clave').val()!=$('#persona-reclave').val()) {
		error=error+'Las contraseñas son diferentes <br>';
		$('.reclave').addClass('has-error');
		$('.clave').addClass('has-error');
	    }
	    else
	    {
		$('.reclave').addClass('has-success');
		$('.reclave').removeClass('has-error');
		$('.clave').addClass('has-success');
		$('.clave').removeClass('has-error');
	    }	
	}
	
	
	if ($('#persona-tipo_documento').val()=='') {
            error=error+'Usted debe ingresar su tipo de documento <br>';
            $('.tipo_documento').addClass('has-error');
        }
        else
        {
            $('.tipo_documento').addClass('has-success');
            $('.tipo_documento').removeClass('has-error');
        }
	
	if ($('#persona-departamento').val()=='') {
            error=error+'Usted debe ingresar la región <br>';
            $('.departamento').addClass('has-error');
        }
        else
        {
            $('.departamento').addClass('has-success');
            $('.departamento').removeClass('has-error');
        }
	
	if ($('#persona-provincia').val()=='') {
            error=error+'Usted debe ingresar la provincia <br>';
            $('.provincia').addClass('has-error');
        }
        else
        {
            $('.provincia').addClass('has-success');
            $('.provincia').removeClass('has-error');
        }
	
	if ($('#persona-distrito').val()=='') {
            error=error+'Usted debe ingresar el distrito <br>';
            $('.distrito').addClass('has-error');
        }
        else
        {
            $('.distrito').addClass('has-success');
            $('.distrito').removeClass('has-error');
        }
	
	if ($('#persona-institucion_id').val()=='') {
            error=error+'Usted debe ingresar la institución <br>';
            $('.institucion_id').addClass('has-error');
        }
        else
        {
            $('.institucion_id').addClass('has-success');
            $('.institucion_id').removeClass('has-error');
        }
	/*
	if ($('#persona-celular').val()=='') {
            error=error+'Debes ingresar tu número de celular <br>';
            $('.celular').addClass('has-error');
        }
        else
        {
            $('.celular').addClass('has-success');
            $('.celular').removeClass('has-error');
        }
	
	if ($('#persona-telefono').val()=='') {
            error=error+'Debes ingresar tu número telefónico <br>';
            $('.telefono').addClass('has-error');
        }
        else
        {
            $('.telefono').addClass('has-success');
            $('.telefono').removeClass('has-error');
        }*/
	
	if ($('#persona-codigo_modular').val()=='') {
            error=error+'Debes ingresar tu código modular <br>';
            $('.codigo_modular').addClass('has-error');
        }
        else
        {
            $('.codigo_modular').addClass('has-success');
            $('.codigo_modular').removeClass('has-error');
        }
	
	if($('#persona-correo_electronico').val()!='' && !validateEmail($('#persona-correo_electronico').val()))
        {
            error=error+'Debes ingresar una dirección de correo válida <br>';
            $('.email').addClass('has-error');
            $('.email').removeClass('has-success');
        }
	
	var dni=$.ajax({
            url: '<?= $dni ?>',
            type: 'POST',
            async: false,
            data: {dni:$('#persona-nro_documento').val()},
            success: function(data){
                
            }
        });
        if ($('#persona-nro_documento').val()!='' && dni.responseText=='1') {
            error=error+'El nro de documento ya ha sido registrado. <br>';
	    $('.nro_documento').addClass('has-error');
            $('.nro_documento').removeClass('has-success');
        }
	
	
	var email=$.ajax({
            url: '<?= $email ?>',
            type: 'POST',
            async: false,
            data: {email:$('#persona-correo_electronico').val()},
            success: function(data){
                
            }
        });
        if ($('#persona-correo_electronico').val()!='' && email.responseText=='1') {
            error=error+'El correo electrónico ya ha sido registrado. <br>';
	    $('.email').addClass('has-success');
            $('.email').removeClass('has-error');
        }
	
	var codigo=$.ajax({
            url: '<?= $codigo ?>',
            type: 'POST',
            async: false,
            data: {codigo:$('#persona-codigo_modular').val()},
            success: function(data){
                
            }
        });
        if ($('#persona-codigo_modular').val()!='' && codigo.responseText=='1') {
            error=error+'El codigo modular no existe. <br>';
	    $('.codigo_modular').addClass('has-error');
            $('.codigo_modular').removeClass('has-success');
	    $('#persona-institucion_id').val('');
	    $('#persona-institucion').val('');
	    $('#persona-dre').val('');
	    $('#persona-ugel').val('');
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
    
    $('.numerico').keypress(function (e) {
	tecla = (document.all) ? e.keyCode : e.which; // 2
	if (tecla==8) return true; // 3
        var reg = /^[0-9\s]+$/;
        te = String.fromCharCode(tecla); // 5
	return reg.test(te); // 6
		
    });		
	
    $('.texto').keypress(function(e) {
	tecla = (document.all) ? e.keyCode : e.which; // 2
	if (tecla==8) return true; // 3
        var reg = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ'_\s]+$/;
        te = String.fromCharCode(tecla); // 5
	return reg.test(te); // 6
    });
    
    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
    function Cargar(value) {
	console.log(value);
	$.ajax({
	    url: "instituciones",
	    dataType: "json",
	    type: "GET",
	    data: {
		q: value
	    },
	    success: function(data){
		if (data) {
		    console.log(data[0]);
		    $("#persona-institucion_id").val(data[0]["id"]);
		    $("#persona-institucion").val(data[0]["denominacion"]);
		    $("#persona-codigo_modular").val(data[0]["codigo_modular"]);
		    $("#persona-dre").val(data[0]["dre"]);
		    $("#persona-ugel").val(data[0]["ugel"]);
		}
		else
		{
		    $("#persona-institucion_id").val("");
		    $("#persona-institucion").val("");
		    $("#persona-codigo_modular").val("");
		    $("#persona-dre").val("");
		    $("#persona-ugel").val("");
		    
		    $.notify({
			message: 'Código modular no se encuentra en la base de datos' 
		    },{
			type: 'danger',
			z_index: 1000000,
			placement: {
			    from: 'bottom',
			    align: 'right'
			},
		    });
		}
		
	    }
	});
    }
    
    $( "#persona-codigo_modular" ).autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "instituciones",
                dataType: "json",
                type: "GET",
                data: {
                    q: request.term
                },
                success: function(data){
		    if (data) {
			response( $.map( data, function( item ) {
			    if (item.id!="") {
				return {
				    id: item.id,
				    label: item.codigo_modular,
				    codigo_modular: item.codigo_modular,
				    denominacion: item.denominacion,
				    ugel: item.ugel,
				    dre: item.dre,
				}	
			    }
			    else
			    {
				$.notify({
				    message: 'Código modular no se encuentra en la base de datos' 
				},{
				    type: 'danger',
				    z_index: 1000000,
				    placement: {
					from: 'bottom',
					align: 'right'
				    },
				});
				
				return {
				    id: null,
				    label: null,
				    codigo_modular: null,
				    denominacion: null,
				    ugel: null,
				    dre: null,
				}
			    }
			    
			}));
		    }
                }
            })
        },
        select: function(event, ui) {
	    if (ui.item.id==null) {
		$.notify({
		    message: 'Código modular no se encuentra en la base de datos' 
		},{
		    type: 'danger',
		    z_index: 1000000,
		    placement: {
			from: 'bottom',
			align: 'right'
		    },
		});
	    }
	    else
	    {
		$("#persona-institucion_id").val(ui.item.id);
		$("#persona-institucion").val(ui.item.denominacion);
		$("#persona-codigo_modular").val(ui.item.codigo_modular);
		$("#persona-dre").val(ui.item.dre);
		$("#persona-ugel").val(ui.item.ugel);	
	    }
        }
    });
    
    
    function distrito(value) {
        $.get( "<?= $instituciones ?>?distrito="+value, function( data ) {
            $( "#persona-institucion_id" ).html( data );
        });
    }
    
    function provincia(value) {
        $.get( "<?= $distritos ?>?provincia="+value, function( data ) {$( "#persona-distrito" ).html( data );});
        $("#persona-distrito").find("option").remove().end().append("<option value></option>").val("");
        $("#persona-institucion_id").find("option").remove().end().append("<option value></option>").val("");
    }
    
    function departamento(value) {
        $.get( "<?= $provincias ?>?departamento="+value, function( data ) {$( "#persona-provincia" ).html( data );});
        $("#persona-provincia").find("option").remove().end().append("<option value></option>").val("");
        $("#persona-distrito").find("option").remove().end().append("<option value></option>").val("");
        $("#persona-institucion_id").find("option").remove().end().append("<option value></option>").val("");
    }
</script>
