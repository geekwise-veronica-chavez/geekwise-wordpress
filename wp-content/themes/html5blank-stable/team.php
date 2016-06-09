<?php /* Template Name: team*/ ?>
<link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<?php get_header( 'team' ); ?>
       <h3 class="team_text">Geekwise Academy was founded on the belief that we, as in the world, can do a whole lot better than we presently are in educating technologists. To accomplish that, we needed to assemble a team of people who know what they’re talking about. Here’s what we came up with.</h3>
         
            
   <section class="team_wise">
   <?php query_posts('post_type=geekwise_team'); ?>
                    
                <?php while (have_posts()) : the_post(); ?>  
       <div class="team_geek">
               
           <a href="indexjake.html" class="photo_name">
            <?php the_post_thumbnail(); ?>
               <div class="name"><?php the_field('name'); ?></div> 
           </a>
       </div>
      <?php endwhile; ?>
   </section>