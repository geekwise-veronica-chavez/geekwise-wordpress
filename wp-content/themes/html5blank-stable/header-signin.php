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
	<body class="course-page">
 <header>
          <section class="about_header"> 
               
                 <label for="dropdown" class="about-label">
                <i class="fa fa-bars"></i>
               </label>
    <nav class="nav_about">
        <a href="/index.php?page_id=6">
               <img src="http://i.imgur.com/njOmOON.png" alt="geekwise sm" class="header_image_sign">
               </a>
        <ul class="flexbox">
            <input type="checkbox" id="dropdown">
    <div class="nav_div">       
                <li class="flex-li">
                    <a href="/index.php?page_id=7" class=".yellow_about_crud">about
                    </a>
                </li>
                <li class="flex-li">
                     <a href="/index.php?page_id=8" class=".main_li_crud">course
                     </a>
                </li>
                <li class="flex-li">
                     <a href="/index.php?page_id=16" class=".main_li_crud">workshops
                     </a>
                </li>
                 <li class="flex-li">
                     <a href="/index.php?page_id=10" class=".main_li_crud">cohort
                     </a>
                </li>
                <li class="flex-li">
                     <a href="/index.php?page_id=14" class=".main_li_crud">team
                     </a>
                </li>
                <li class="flex-li">
                    <a href="/index.php?page_id=18" class=".main_li_crud">contact
                    </a>
                </li> 
                
    </div>
        </ul>

    </nav>
            
</section>
        </header>
  
    