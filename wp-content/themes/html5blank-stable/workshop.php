<?php /* Template Name: workshop */ ?>
<?php get_header( 'workshop'); ?>
 <main class="main_workshop">
    <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            
           <section class="work_sec">
              <h1 class="work_header"> </h1>
               <p class="work_text"> </p>
               <p class="work_text"></p>
               
           </section>
           <section class="work_sec">
               <h1 class="work_header"></h1>
               <article class="bold_workshop"></article>
               <p class="work_text"> </p>
               <p class="work_text"></p>
               <article class="bold_workshop"></article>
               <p class="work_text"></p>
               <p class="work_text"></p>
               <article class="bold_workshop"></article>
               <p class="work_text"></p>
               <p class="work_text"></p>
               
           </section>
            <section class="work_sec">
                <h1 class="work_header"></h1>
                <article class="bold_workshop"> </article>
                <p class="work_text"></p>
                <p class="work_text"></p>
                <article class="bold_workshop"></article>
                <p class="work_text"></p>
                <p class="work_text"></p>
              </section>
        </main>
        <div class="footer_work"><a href="#" id="bottom_work"></a></div>
