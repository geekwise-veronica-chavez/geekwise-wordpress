<?php /* Template Name: team*/ ?>
<?php get_header( 'Team' ); ?>
       <article class="team_text"></article>
         <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
   <section class="team_wise">
       <div class="team_geek"><a href="indexjake.html" class="photo_name">
       <div class="name"></div> </a>
       </div>
       <div class="team_geek"><a href="indexirma.html" class="photo_name">
       <div class="name"></div></a> </div>
       <div class="team_geek"><a href="indexbeth.html" class="photo_name"> <div class="name"> </div></a> </div>
       <div class="team_geek"><a href="indexterry.html" class="photo_name"> <div class="name"> </div></a></div>
   </section>