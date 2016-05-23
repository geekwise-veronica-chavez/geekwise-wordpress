<?php /* Template Name: course*/ ?>
<?php get_header('course'); ?>
 <main class=crud_course>
             <div class='stem'><a href="#" class='stem_click'>Click here to checkout our STEM Summer Programs!</a></div>

            <article class="course_info">
                Geekwise Academy Courses are super-fast-paced and specifically designed to ensure that you’re learning what we’re teaching. Each course begins with a crash course in “How to Geekwise,” which will give you strategies for getting every ounce of benefit you can out of your Geekwise Academy experience. Geekwise Academy Courses deploy a social learning process that is intended to provide you with workplace communication training to go alongside the technology skill you signed up for. Courses include regular assessments to evaluate your progress and to make sure no one gets left behind. Finally, each course wraps up with a final project that is actual real world work.
            </article>
        
            <section class="section-crud">
                <table>
                    <tr class="top_table">
                        <th id="topic">Topic</th>
                       <th id="duration">Duration</th>
                        <th id="time">Date/Time</th>
                        <th id="fee">Fee</th>
                        <th id="instructor">Instructor</th>
                        <th id="up">SignUp</th>
                    </tr>
                  
                    <?php query_posts('post_type=geekwise'); ?>
                    
                        <?php while (have_posts()) : the_post(); ?>  
                     <tr class="class_crud">
                       
                         <td class="topic_crud"><?php the_title(); ?><?php the_content(); ?></td>
                        <td class="duration"><?php the_field('duration'); ?></td>
                        <td class="time"><?php the_field('date'); ?></td>
                        <td class="fee"><?php the_field('fee'); ?></td>
                        <td class="instruction"><?php the_field('instructor'); ?></td>
                         <td class="enroll"><a href="/index.php?page_id=12" class="enroll_sign"><?php the_field('signup'); ?></a></td>
                        <?php endwhile; ?>
                    </tr>
              
                </table>
            </section>
            <section class="bottom_crud"><a href="/index.php?page_id=12" class="footer_crud">SEATING IS LIMITED, SIGN UP TODAY</a></section>
        </main>