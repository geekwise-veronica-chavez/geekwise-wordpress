<?php /* Template Name: team*/ ?>
<?php get_header( 'team' ); ?>
       <article class="team_text">Geekwise Academy was founded on the belief that we, as in the world, can do a whole lot better than we presently are in educating technologists. To accomplish that, we needed to assemble a team of people who know what they’re talking about. Here’s what we came up with.</article>
         
            
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