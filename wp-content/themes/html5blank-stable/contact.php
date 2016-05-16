<?php /* Template Name: contact */ ?>
<?php get_header( 'contact' ); ?>
        <main class="background small_background">
          
            
                <section class="contact_info"> <img src="http://i.imgur.com/t23ma7m.png" alt="contact">
                 <?php query_posts('post_type=geekwise_contact'); ?>
                    
                <?php while (have_posts()) : the_post(); ?> 
                <p id="address"><?php the_field('address'); ?></p>

                <p id="terry"><a href="#" id="terry"><?php the_field('email'); ?></a></p>
                  <?php endwhile; ?>
               </section>
              
      
        </main>