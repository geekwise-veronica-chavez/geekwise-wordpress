<?php /* Template Name: workshop */ ?>
<?php get_header( 'workshop'); ?>

 <main class="main_workshop_crud">
             <div class='stem'><a href="#" class='stem_click'>Click here to checkout our STEM Summer Programs!</a></div>

           <?php query_posts('post_type=geekwise_workshop'); ?>
                    
           <?php while (have_posts()) : the_post(); ?>  
           
        
           <section class="work_sec_crud">
               <h1 class="work_header"><?php the_title(); ?> <?php the_content(); ?></h1>
               <article class="bold_workshop"><?php the_field('quote'); ?></article>
               <p class="work_text"><?php the_field('date'); ?> </p>
               <p class="work_text"><?php the_field('info'); ?></p>
               <article class="bold_workshop"><?php the_field('quote-two'); ?></article>
               <p class="work_text"><?php the_field('date-two'); ?> </p>
               <p class="work_text"><?php the_field('info-two'); ?></p>
               <article class="bold_workshop"><?php the_field('quote-three'); ?></article>
               <p class="work_text"><?php the_field('date-three'); ?> </p>
               <p class="work_text"><?php the_field('info-three'); ?></p>
           </section>
           
          <?php endwhile; ?>
             <div class="footer_work"><a href="#" id="bottom_work">sitting is limited, signup today!</a></div>
        </main>
      
