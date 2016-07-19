<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/morris/morris.core.css?1420463396" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/css/login.css" />
    
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<section class=" section-account">
    <div class="spacer"></div>
    <?= $content ?>
        
</section>


<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/spin.js/spin.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/moment/moment.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/jquery.flot.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/jquery.flot.pie.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/flot/curvedLines.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/d3/d3.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/d3/d3.v3.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/App.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppNavigation.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppOffcanvas.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppCard.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppForm.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppNavSearch.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppVendor.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/demo/Demo.js"></script>
<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/demo/DemoDashboard.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
