<?php /* Template Name: cohort */ ?>
<?php get_header('cohort'); ?>
 <main class="cohort_main_crud">
  
           
        <section class="cohort_top">
             <?php query_posts('post_type=geekwise_cohort'); ?> 
           <?php while (have_posts()) : the_post(); ?> 
        <?php the_content(); ?>
          <?php endwhile; ?>
          
           <!--<h1 class="cohort_question"></h1>-->
           <!--<p class="paragraph"></p>-->
           <!-- <p class="paragragh"></p>-->
            
          
           <!--     <span class="goals"><?php the_field('goal_start'); ?> </span>-->
           <!--     <ol>-->
           <!--     <li class="info_goals"><?php the_field('one'); ?></li>-->
           <!--     <li class="info_goals"><?php the_field('two'); ?></li>-->
           <!--     <li  class="info_goals"><?php the_field('three'); ?></li>-->
           <!--     <li  class="info_goals"><?php the_field('four'); ?></li>-->
           <!--     <li  class="info_goals"><?php the_field('five'); ?></li>-->
           <!--     <span class="goals"><?php the_field('goal_end'); ?></span>-->
               
           <!-- </ol>-->
        
       </section>
          
    </main>
    
    <section class="cohort_members">
     
           
       <h1 id="members_text">Meet the Geekwise Academy Cohort Classes!</h1>
       
           <div class="dropdown_bar">
               <label for="cohort_data" class="class_members" >
                   <i class="fa fa-angle-down down_angle"></i> Cohort Class 2 (July 2015 - January 2016) </label>
                  <input type="checkbox" id="cohort_data">
               <div class="group_bar first_class">
        <?php query_posts('post_type=geekwise_cohort'); ?>        
       <?php while (have_posts()) : the_post(); ?> 
              <div class="class2_crud">
               
                 <div class="photos_cohort"><?php the_post_thumbnail(); ?></div>
                  <h1 class="name_crud"><?php the_field('name'); ?></h1>
                  <p class="story"><?php the_field('description'); ?> </p>
                  
              </div>
             <?php endwhile; ?>
           </div>
          </div> 
        
       <div class="dropdown_bar">
        <label for="cohort_data2" class="class_members class_mem2" >
                   <i class="fa fa-angle-down down_angle"></i>Cohort Class 1 (January 2015 - July 2015)</label>
                  <input type="checkbox" id="cohort_data2">
                  <div class="group_bar">
                   
         <?php query_posts('post_type=geekwsie_cohort_two'); ?>                       
       <?php while (have_posts()) : the_post(); ?> 
                      <div class="class2_crud">
                       
                          <div class="photos_cohort"><?php the_post_thumbnail(); ?></div>
                          <h1 class="name"><?php the_field('name2'); ?></h1>
                          <p class="story"><?php the_field('description2'); ?></p>
                      </div>
                     <?php endwhile; ?>  
                  </div>
        </div>
    </section>
    