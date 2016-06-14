<?php /* Template Name: cohort */ ?>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<?php get_header('cohort'); ?>

 <main class="cohort_main_crud">
  
           
        <section class="cohort_top">
         
        <!--     <?php query_posts('post_type=geekwise_cohort'); ?> -->
        <!--   <?php while (have_posts()) : the_post(); ?> -->
        <!--<?php the_content(); ?>-->
        <!--  <?php endwhile; ?>-->
            <h1 class="cohort_question"> what is the geekwise academy cohort program?</h1>
           <p class="paragraph">The Geekwise Academy Cohort program has been developed to bridge the gap between Geekwise Academy course students and their ability to move into roles as developers in the local technology industry. </p>
            <p class="paragragh">The Cohort consists of two phases. The first is a two week internship for the 20 individuals that were invited to the Cohort program. This phase includes QA and testing of the invitees skill set. In phase two, 8 of the 20 Invitees will be chosen to participate in a 24 week internship program. Phase two consists of three assignments each eight weeks in length. During this time the Cohorts will complete work for clients through projects of increased difficulty. Also, Cohort participants will be required to co-teach Geekwise Academy classes. They will work with the Cohort Director and Bethany Mily to prepare for this opportunity.</p>
           <ol>
                <span class="goals">Our goal here is simple, we want to produce developers that are:</span>
                <li class="info_goals">Information literate</li>
                <li class="info_goals">Confident in their problem solving abilities</li>
                <li  class="info_goals">Reliable and professional</li>
                <li  class="info_goals">Good communicators</li>
                <li  class="info_goals">Driven to succeed, able to learn, and receive criticism</li>
                <span class="goals">Bitwise Industries is excited about this new adventure that kicks off on January 12, 2015. We look forward to mentoring the next generation of technologists in Fresno.</span>
            </ol>
   
        
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
                       
                          <div class="photos_cohort  small_img_cohort"><?php the_post_thumbnail(); ?></div>
                          <h1 class="name"><?php the_field('name2'); ?></h1>
                          <p class="story"><?php the_field('description2'); ?></p>
                      </div>
                     <?php endwhile; ?>  
                  </div>
        </div>
    </section>
    