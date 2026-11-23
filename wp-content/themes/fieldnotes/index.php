<?php get_header(); ?>
<?php if (is_singular()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="single">
      <div class="meta"><?php echo esc_html(get_the_date()); ?></div>
      <h1><?php the_title(); ?></h1>
      <div class="entry"><?php the_content(); ?></div>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <div class="posts">
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <div class="meta"><?php echo esc_html(get_the_date()); ?></div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
  </div>
  <?php the_posts_pagination(); ?>
<?php endif; ?>
<?php get_footer(); ?>
