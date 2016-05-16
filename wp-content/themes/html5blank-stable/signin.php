<?php /* Template Name: signin */ ?>
<?php get_header( 'signin' ); ?>


 <li id="sign_in_tab"><a href="#" class=" sign_tab right">Signup</a></li>
        <section class="sign_middle">
         
                    
               <p class="sign_top">Course Selection & Enrollment</p>
                <?php query_posts('post_type=geekwise_signup'); ?>
                    
                        <?php while (have_posts()) : the_post(); ?> 
             <div class="dates">
                <a href="#" class="date_start"><?php the_title(); ?></a>
                <div class="class_date"><?php the_field('date'); ?></div>
                
             </div>
             <div id="refund"><?php the_field('refund'); ?></div>
              <?php endwhile; ?>
        </section>
        </body>
        </html>
        