
<?php /* Template Name: crud */ ?>
<?php get_header(); ?>

<?php query_posts('post_type=geekwise'); ?>
<?php while (have_posts()) : the_post(); ?>

<li><?php the_title(); ?></li>
<li><?php the_content(); ?></li>
<li><?php the_field('day_time'); ?></li>
<li><?php the_field('duration'); ?></li>
<li><?php the_field('fee'); ?></li>
<li><?php the_field('instrctors'); ?></li>

<?php endwhile; ?>