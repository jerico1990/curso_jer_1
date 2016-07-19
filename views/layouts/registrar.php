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
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/css/theme-default/libs/summernote/summernote.css?1425218701" />
    <link type="text/css" rel="stylesheet" href="<?= \Yii::$app->request->BaseUrl ?>/css/registrar.css" />
    <!-- END STYLESHEETS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
    <script src="//code.jquery.com/jquery-1.8.2.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function suppressBackspace(evt) {
            evt = evt || window.event;
            var target = evt.target || evt.srcElement;
        
            if (evt.keyCode == 8 && !/input|textarea/i.test(target.nodeName)) {
                return false;
            }
            return true;
        }
        
        document.onkeydown = suppressBackspace;
        document.onkeypress = suppressBackspace;
    </script>
</head>
<body class="menubar-hoverable header-fixed ">
<?php $this->beginBody() ?>
<div id="base">
    <div id="content" style="padding-top: 10px">
        <section>
                <div class="section-body contain-lg">
                    <?= $content ?>
                </div><!--end .card-body -->
        </section>
    </div>
</div>
                <script src="<?= \Yii::$app->request->BaseUrl ?>/notify/bootstrap-notify.js"></script>
                <script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/spin.js/spin.min.js"></script>
		
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/inputmask/jquery.inputmask.bundle.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/moment/moment.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/bootstrap-rating/bootstrap-rating-input.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/microtemplating/microtemplating.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/libs/summernote/summernote.min.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/App.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppNavigation.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppCard.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppForm.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/source/AppVendor.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/demo/Demo.js"></script>
		<script src="<?= \Yii::$app->request->BaseUrl ?>/materialadmin/assets/js/core/demo/DemoPageContacts.js"></script>
                
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
