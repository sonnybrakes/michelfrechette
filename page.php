<?php get_header();

  while(have_posts()) {
    the_post(); ?>


  <?php }

  get_footer();

?>
