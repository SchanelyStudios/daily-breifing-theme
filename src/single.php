<?php get_header(); ?>
<main class="main--daily">
  <?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/article'); ?>
  <?php endwhile; ?>

  <?php endif; ?>
</main>
<?php get_footer(); ?>
