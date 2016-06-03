 <?php /* Template Name: about */ ?>
 <?php get_header( 'about' ); ?>
 <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
 <div class="img_owl">
       <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
                <img src="http://i.imgur.com/EdXcPPL.png" alt="owl" class="img">
       
                <p class="about_quote">Learn a real world <br> technology skill. Fast.</p>
            </div>
            
        <main class="main_about_crud">
            
 <section class="section_about_crud">     
               <li class="sign-tag">
                   <a href="/index.php?page_id=12" class=" middle highlight-home main">Signup</a >
                </li>
                      <?php query_posts('post_type=geekwise_about'); ?>
                    
                        <?php while (have_posts()) : the_post(); ?>  
                <div class="about_what" id="about">
                   

                    <h1><?php the_title(); ?><?php the_content(); ?></h1>
                    <p class="about"><?php the_field('what'); ?></p>
                    




                    
                   
                    
                 
                </div>
             
                
               <?php endwhile; ?>
               
               <div class="about_what" id="about">
                   <h1>DETAILS</h1>
               <p class="about"> 
                    <p><u> Length:</u>Each course lasts 6 weeks</p>
                     <p><u>Time:</u> Each course meets from 6:00-9:00p, two nights per week</p>
                      <p><u>Location:</u> All Classes meet at Bitwise Mural District (2210 San Joaquin St., Fresno, CA 93721)</p>
                    <p><u>Cost:</u> Each class costs only $250</p>
                        </p>
                </div>
            </section>
               
      
    
              <div class="want_to">
                  <a href="#" id="want_to">want to geekwise? sign-up today</a>
            </div>
        </main>
        