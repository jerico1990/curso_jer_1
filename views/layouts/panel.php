<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Etapa;
use app\models\Usuario;
use app\models\Persona;
AppAsset::register($this);

$usuario=Usuario::findOne(\Yii::$app->user->id);
$persona=Persona::find()->where('id=:id',[':id'=>$usuario->persona_id])->one();
$etapa1=Etapa::find()->where('persona_id=:persona_id and etapa=1',[':persona_id'=>$persona->id])->one();
$etapa2=Etapa::find()->where('persona_id=:persona_id and etapa=2',[':persona_id'=>$persona->id])->one();
$etapa3=Etapa::find()->where('persona_id=:persona_id and etapa=3',[':persona_id'=>$persona->id])->one();
$etapa4=Etapa::find()->where('persona_id=:persona_id and etapa=4',[':persona_id'=>$persona->id])->one();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/summernote/summernote.css?1425218701" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/css/panel.css" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<!-- BEGIN HEADER-->
<?php /*
<header id="header" >
    
    <div class="headerbar">
	<!-- Brand and toggle get grouped for better mobile display -->
	
	<div class="headerbar-left">
	    <ul class="header-nav header-nav-options">
		<li class="header-nav-brand" >
		    <div class="brand-holder">
			<a href="../../html/dashboards/dashboard.html">
			    <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
			</a>
		    </div>
		</li>
		<li>
		    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
			<i class="fa fa-bars"></i>
		    </a>
		</li>
	    </ul>
	</div>
	
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="headerbar-right">
	    <ul class="header-nav header-nav-profile">
		<li class="dropdown">
		    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
			<img src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/img/avatar1.jpg?1403934956" alt="" />
			<span class="profile-info">
			    <?= Yii::$app->user->identity->username ?>
			</span>
			
		    </a>
		    <ul class="dropdown-menu animation-dock">
			<li> <?= Html::a('<i class="fa fa-fw fa-power-off text-danger"></i> Logout',['login/logout']);?></li>
		    </ul><!--end .dropdown-menu -->
		</li><!--end .dropdown -->
	    </ul><!--end .header-nav-profile -->
	</div><!--end #header-navbar-collapse -->
    </div>
    
</header>
*/ ?>
<!-- END HEADER-->
<div id="base">
    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->
    <div id="content" style="padding-top: 0px">
        <section>
	    <div class="section-body contain-lg">
		<?= $content ?>
	    </div><!--end .card-body -->
        </section>
    </div>
    <!-- BEGIN MENUBAR-->
    <?php /*
    <div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
	    <div>
		<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
		    <i class="fa fa-bars"></i>
		</a>
	    </div>
	    <div class="expanded">
		<a href="../../html/dashboards/dashboard.html">
		    <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
		</a>
	    </div>
	</div>
	
    <div class="menubar-scroll-panel">
	    <!-- BEGIN MAIN MENU -->
	    <ul id="main-menu" class="gui-controls">
		<!-- BEGIN DASHBOARD -->
		<?php if($etapa1){?>
		    <li>
		    <?= Html::a('<div class="gui-icon"><i class="md md-home"></i></div>
				<span class="title">Información</span>',['persona/index'],['class'=>'']);?>
		    </li><!--end /menu-li -->
		<?php }?>
		<?php if($etapa2){?>
		    <li>
			<?= Html::a('<div class="gui-icon"><i class="md md-home"></i></div>
				    <span class="title">Documentos</span>',['documento/index'],['class'=>'']);?>
		    </li><!--end /menu-li -->
		<?php }?>
		<?php if($etapa3){?>
		    <li>
			<?= Html::a('<div class="gui-icon"><i class="md md-home"></i></div>
				    <span class="title">Test de prueba</span>',['test/index'],['class'=>'']);?>
		    </li><!--end /menu-li -->
		<?php }?>    
		<?php if($etapa4){?>
		    <li>
			<?= Html::a('<div class="gui-icon"><i class="md md-home"></i></div>
				    <span class="title">Carta de compromiso</span>',['carta/index'],['class'=>'']);?>
		    </li><!--end /menu-li -->
		<?php }?>
	    </ul><!--end .main-menu -->
	    <!-- END MAIN MENU -->
	    <div class="menubar-foot-panel">
		<small class="no-linebreak hidden-folded">
		    <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
		</small>
	    </div>
	</div><!--end .menubar-scroll-panel-->
	   
    </div><!--end #menubar-->
    */?> 
    <!-- END MENUBAR -->
</div>

<div class="no-print" style="position: fixed; top: 70px; right: 0px; border-radius: 5px 0px 0px 5px; padding: 10px 15px; font-size: 22px; z-index: 1000; cursor: pointer; color: rgb(60, 141, 188); box-shadow: rgba(0, 0, 0, 0.0980392) 0px 1px 3px; background: rgb(255, 255, 255);">
    <?php if($etapa1 && $etapa1->estado==0){?>
	<?= Html::a('<i class="md md-warning"></i> Información',['persona/index'],['class'=>'']);?><br>
    <?php }elseif($etapa1 && $etapa1->estado==1){ ?>
	<?= Html::a('<i class="md md-check"></i> Información',['persona/index'],['class'=>'']);?><br>
    <?php }?>
    
    
    <?php if($etapa2 && $etapa2->estado==0){?>
	<?= Html::a('<i class="md md-warning"></i> Documentos',['documento/index'],['class'=>'']);?><br>
    <?php }elseif($etapa2 && $etapa2->estado==1){ ?>
	<?= Html::a('<i class="md md-check"></i> Documentos',['documento/index'],['class'=>'']);?><br>
    <?php }?>
    
    
    <?php if($etapa3 && $etapa3->estado==0){?>
	<?= Html::a('<i class="md md-warning"></i> Test',['test/index'],['class'=>'']);?><br>
    <?php }elseif($etapa3 && $etapa3->estado==1){ ?>
	<?= Html::a('<i class="md md-check"></i> Test',['test/index'],['class'=>'']);?><br>
    <?php }?>
    
    <?php if($etapa4 && $etapa4->estado==0){?>
	<?= Html::a('<i class="md md-warning"></i> Carta de compromiso',['carta/index'],['class'=>'']);?><br>
    <?php }elseif($etapa4 && $etapa4->estado==1){ ?>
	<?= Html::a('<i class="md md-check"></i> Carta de compromiso',['carta/index'],['class'=>'']);?><br>
    <?php }?>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
