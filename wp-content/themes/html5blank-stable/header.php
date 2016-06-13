<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="icon" type="image/png" href="http://geekwiseacademy.com/img/geekwise-favicon.png">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<label for="dropdown" class="label_main ham-main">
    <i class="fa fa-bars"></i>  
        </label>
        
     <header class="color_bg">
       <input type="checkbox" id="dropdown">
        <div class="nav_main_bar">
<!--<nav class="nav flex" role="navigation">-->
<!--	<?php html5blank_nav(); ?>-->
<!--</nav>-->
             <nav class="flex">
                <ul class="main_bar">
                 <li class="nav_bar_li">
                     <a href="/index.php?page_id=7" class="home_li">about</a>
                 </li>
                 <li class="nav_bar_li">
                     <a href="/index.php?page_id=8" class="home_li">course</a>
                 </li>
                 <!--<li class="nav_bar_li">-->
                 <!--    <a href="/index.php?page_id=16" class="home_li">workshops</a>-->
                 <!--</li>-->
                 <li class="nav_bar_li">
                     <a href="/index.php?page_id=10" class="home_li">cohort</a>
                 </li>
                 <li class=" signup-home">
                     <a href="/index.php?page_id=12" class="header_nav nav_signup">signup</a>
                 </li>
                 <li class="nav_bar_li">
                     <a href="/index.php?page_id=14" class="home_li">team</a>
                 </li>
                 <li class="nav_bar_li">
                     <a href="/index.php?page_id=18" class="home_li">contact</a>
                 </li>
             </ul>   
         </nav>
         </div>
          
			<header class="header clear" role="banner">

					<!-- logo -->
					<!--<div class="logo">-->
					<!--	<a href="<?php echo home_url(); ?>">-->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<!--		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">-->
					<!--	</a>-->
					<!--</div>-->
					<!-- /logo -->

					<!-- nav -->
					<!--<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
