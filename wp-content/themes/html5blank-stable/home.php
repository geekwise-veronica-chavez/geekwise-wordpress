<?php /* Template Name:home */ ?>
<?php get_header( 'home' ); ?>
<link href="//db.onlinewebfonts.com/c/e5f2f90ef20309de329a7d174c3d2245?family=Franchise" rel="stylesheet" type="text/css"/>
 <main class=home_bg>
  
        <div class="image white">
            
        </div>
         <div class="text">
             <p class="em_fast"></p>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
             <p class="quote"></p>
             <!--<hr>-->
        </div>
     </main>
     <!-- <footer class="icon_footer">-->
     <!--  <div class="width_footer">-->
     <!--       <div class="icons">-->
     <!--               <a href="indexcourse.html" class="bottom_link">-->
     <!--               <img src="http://i.imgur.com/PBj2Oyg.png" alt="learn" id="learn"/>-->
     <!--            <div class="media">learn more</div>-->
     <!--               </a>-->
     <!--       </div>-->
     <!--       </div>-->
            
     <!--     <div class="width_footer">-->
     <!--          <div class="icons">-->
     <!--             <a href="indexsignin.html" class="bottom_link">-->
     <!--               <img src="http://i.imgur.com/9p5MVtW.png" alt="sign" id="sign"/>-->
     <!--               <div class="media">sign up</div>-->
     <!--             </a>-->
     <!--           </div>-->
     <!--   </div>-->
     <!--    <div class="vertical-line"></div>-->
     <!--    <div class="width_footer">-->
     <!--       <div class="icons">-->
     <!--           <a href="indexabout.html" class="bottom_link">-->
     <!--           <img src="http://i.imgur.com/U05muFi.png" alt="why" id="why"/> -->
     <!--        <div class="media">why geekwise&#63;-->
     <!--        </div>-->
     <!--            </a>-->
     <!--            </div>-->
     <!--   </div> -->
     <!--</footer>-->
     <footer class='icon_footer'>
      <div class="width_footer">
       <?php query_posts('post_type=geekwise_home'); ?>
                    
                        <?php while (have_posts()) : the_post(); ?>
            <div class="icons">
                    <a href="indexcourse.html" class="bottom_link">
                  
                 <div class="media"><?php the_post_thumbnail(); ?> <br> <?php the_field('icons'); ?> </div>
                    </a>
            <?php the_content(); ?>
            </div>
               <?php endwhile; ?>
           
         </div>
        
      
     </footer>