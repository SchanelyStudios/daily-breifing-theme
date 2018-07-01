<?php get_header(); ?>
<main class="main--home">
  <div class="daily-list">
    <h2>Recent Briefings</h2>
    <?php if (have_posts()) : ?>
      <?php $count = 0; ?>

      <?php if ($paged > 1) : ?>
      <?php get_template_part('partials/pagination'); ?>
      <?php endif; ?>

    <ul>
      <?php while (have_posts()) : the_post(); ?>
      <li class="article <?php echo $paged === 1 && $count < NUM_FEATURED ? 'article--featured' : 'article--short'; ?>">
        <?php get_template_part('partials/article', 'short'); ?>
      </li>
      <?php $count++; ?>
      <?php endwhile; ?>
    </ul>

    <?php get_template_part('partials/pagination'); ?>
  </div>
  <?php endif; ?>

  <?php get_sidebar(); ?>

</main>
<?php get_footer(); ?>
