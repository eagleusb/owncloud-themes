<!DOCTYPE html>
<!--[if lt IE 7]><html class="ng-csp ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]><html class="ng-csp ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]><html class="ng-csp ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]><html class="ng-csp ie ie9 lte9"><![endif]-->
<!--[if gt IE 9]><html class="ng-csp ie"><![endif]-->
<!--[if !IE]><!--><html class="ng-csp"><!--<![endif]-->

	<head data-requesttoken="<?php p($_['requesttoken']); ?>">
		<title>
		<?php p($theme->getTitle()); ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-itunes-app" content="app-id=543672169">
		<link rel="shortcut icon" href="<?php print_unescaped(image_path('', 'favicon.png')); ?>" />
		<link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>" />
		
		<?php $themepath = OC::$WEBROOT.'/themes/'.OC_Util::getTheme() ?>
		
		<!-- Optional CSS -->
		<link media="screen" type="text/css" href="<?php print_unescaped($themepath.'/core/css/font-awesome.css') ?>" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
		<!-- default CSS -->
		<?php foreach($_['cssfiles'] as $cssfile): ?>
			<link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" type="text/css" media="screen" />
		<?php endforeach; ?>
		
		<!-- Optional JS -->
		<!--<script type="text/javascript" src="<?php print_unescaped($themepath.'/core/js/bootstrap.min.js') ?>"></script>-->
		<!-- default JS -->
		<?php foreach($_['jsfiles'] as $jsfile): ?>
			<script type="text/javascript" src="<?php print_unescaped($jsfile); ?>"></script>
		<?php endforeach; ?>

		<?php foreach($_['headers'] as $header): ?>
			<?php
				print_unescaped('<'.$header['tag'].' ');
				foreach($header['attributes'] as $name=>$value) {
					print_unescaped("$name='$value' ");
				};
				print_unescaped('/>');
			?>
		<?php endforeach; ?>
	</head>

	<body id="body-login">
		<div class="wrapper"><!-- for sticky footer -->
			<header>
			<div id="header">
				<!--<img src="<?php print_unescaped(image_path('', 'logo.svg')); ?>" class="svg" alt="<?php p($theme->getName()); ?>" />-->
				<img src="<?php print_unescaped($themepath.'/core/img/logo_login.png'); ?>" class="svg loglogin" alt="<?php p($theme->getName()); ?>" />
				<div id="logo-claim" style="display:none;"><?php p($theme->getLogoClaim()); ?></div>
			</div>
			</header>
			
			<div id="icon_login">
				<i class="fa fa-cloud fa-5x" style="color:#45aeff;width:150px;"><p class="icon_titre">Partagez</p></i>
				<i class="fa fa-users fa-5x" style="color:#17c894;width:150px;"><p class="icon_titre">Communiquez</p></i>
				<i class="fa fa-lock fa-5x" style="color:#f19410;width:150px;"><p class="icon_titre">En Sécurité</p></i>
			</div>

			<?php print_unescaped($_['content']); ?>

			<div class="push"></div><!-- for sticky footer -->
			<footer>
			<p class="info">
				<?php print_unescaped($theme->getShortFooter()); 
				echo '<br /> Copyright '.date("Y");
				?>
			</p>
			</footer>
		</div>
	</body>
</html>
