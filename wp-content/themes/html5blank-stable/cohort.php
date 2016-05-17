<?php /* Template Name: cohort */ ?>
<?php get_header('cohort'); ?>
 <main class="cohort_main">
  
            <?php query_posts('post_type=geekwise_cohort'); ?>
                    
         <?php while (have_posts()) : the_post(); ?>    
        <section class="cohort_top">
       
           <h1 class="cohort_question"><?php the_field('question'); ?></h1>
           <p class="paragraph"><?php the_field('para'); ?></p>
            <p class="paragragh"><?php the_field('para2'); ?></p>
            
          
                <span class="goals"><?php the_field('goal_start'); ?> </span>
                <ol>
                <li class="info_goals"><?php the_field('one'); ?></li>
                <li class="info_goals"><?php the_field('two'); ?></li>
                <li  class="info_goals"><?php the_field('three'); ?></li>
                <li  class="info_goals"><?php the_field('four'); ?></li>
                <li  class="info_goals"><?php the_field('five'); ?></li>
                <span class="goals"><?php the_field('goal_end'); ?></span>
               
            </ol>
        
       </section>
            <?php endwhile; ?>
    </main>
    
    <section class="cohort_members">
       <h1 id="members_text">Meet the Geekwise Academy Cohort Classes!</h1>
     
           <div class="dropdown_bar">
               <label for="cohort_data" class="class_members" >
                   <i class="fa fa-angle-down down_angle"></i> Cohort Class 2 (July 2015 - January 2016) </label>
                  <input type="checkbox" id="cohort_data">
               <div class="group_bar first_class">
                
        
              <div class="class2">
                <?php while (have_posts()) : the_post(); ?> 
                 <div class="photos_cohort"><?php the_post_thumbnail(); ?></div>
                  <h1 class="name"><?php the_field('name'); ?></h1>
                  <p class="story"><?php the_field('story'); ?> </p>
                    <?php endwhile; ?>
              </div>
            
           </div>
       
       <div class="dropdown_bar">
        <label for="cohort_data2" class="class_members class_mem2" >
                   <i class="fa fa-angle-down down_angle"></i>  </label>
                  <input type="checkbox" id="cohort_data2">
                  <div class="group_bar">
                      <div class="class2">
                          <img src="http://i.imgur.com/2S08cR0.jpg" alt="name" class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p>
                      </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/7ydkI3R.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p>
                      </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/9Z83jBM.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p>
                      </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/s1feR8v.jpg" alt=""  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p>
                      </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/qdejOcf.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p></div>
                      <div class="class2">
                          <img src="http://i.imgur.com/LIH0jPA.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p> </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/BzHjQDD.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p> </div>
                      <div class="class2">
                          <img src="http://i.imgur.com/XtyYWsw.jpg" alt="name"  class="photos_cohort">
                          <h1 class="name"></h1>
                          <p class="story"></p> </div>
                  </div>
        </div>
    </section>
    