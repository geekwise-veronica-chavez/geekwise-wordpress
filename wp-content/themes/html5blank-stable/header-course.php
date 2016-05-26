<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <link rel="icon" type="image/png" href="http://geekwiseacademy.com/img/geekwise-favicon.png">

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
         <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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

    <label for="dropdown" class="label_main">
    <i class="fa fa-bars"></i>  
        </label>
        
   
     <header class="red-bg">
     
       <input type="checkbox" id="dropdown">
        <div class="nav_main_bar course_nav">
             <nav class="flex2">
                    <a href="/index.php?page_id=6">
               <img src="http://i.imgur.com/njOmOON.png" alt="geekwise sm" class="header_image_contact">
               </a>  
                <ul class="course_ul">
                
                 <li class="li">
                     <a href="/index.php?page_id=7" class="course_li">about</a>
                 </li>
                 <li class="li">
                     <a href="/index.php?page_id=8" class=" yellow">course</a>
                 </li>
                 <li class="li">
                     <a href="/index.php?page_id=16" class="course_li">workshops</a>
                 </li>
                 <li class="li">
                     <a href="/index.php?page_id=10" class="course_li">cohort</a>
                 </li>
                
                 <li class="li">
                     <a href="/index.php?page_id=14" class="course_li">team</a>
                 </li>
                 <li class="li">
                     <a href="/index.php?page_id=18" class="course_li">contact</a>
                 </li>
                  <li class="yellow_sign li sign_display">
                     <a href="/index.php?page_id=12" class="course_sign">signup</a>
                 </li>
             </ul>   
         </nav>
           <div class="course_quote"> NO FLUFF. WE TEACH SKILLS THAT YOU CAN USE TO MAKE MONEY.</div>
         </div>
         
     </header> 
     