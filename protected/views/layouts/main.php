<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<link  media="screen and (min-width:992px) and (max-width:2500px)" rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/nanoscroller.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/navigation.css" />
<title>Untitled Document</title>
</head>

<body>
<header class="clearfix">
    <div class="logo-holder clearfix"><a href="/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.svg" width="92" height="36" ></a></div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-meniu-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!--/navbar-header -->
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-meniu-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/page/link/2" data-link="2">about</a></li>
                    <li><a href="/page/link/3" data-link="3">news</a></li>
                    <li><a href="/page/link/4" data-link="4">products</a></li>
                    <li><a href="/page/link/5" data-link="5">logistic</a></li>
                    <li><a href="/page/link/6" data-link="6">contacts</a></li>
                </ul><!--/navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</header>

<div class="wrapper clearfix">
    <section id="main-content">
    	<div class="container-fluid">
			<div class="row">
            	<div class="col-xs-12 top-block">
                
                
                	
                </div><!--/top-block -->
                
                <div class="col-xs-12 bottom-block">
                	<?php echo $content; ?>
                </div><!--/bottom-block-->
            </div><!--/row -->
        </div><!--/cintainer -fluid -->
    </section>
    <div id="push"></div>
</div><!--/ wrapper -->
<footer>
	<div class="copy-holder"><span>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;Vudimeksus. </span><span>Made by&nbsp;<a href="#">inlusion</a></span></div>
</footer>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nanoscroller.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/owl.carousel.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/nav.js"></script>

</body>
</html>