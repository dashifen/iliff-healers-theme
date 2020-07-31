<?php get_header(); ?>

<section class="body"><?php the_content() ?></section>

<?php $videos = new WP_Query(['post_type' => 'iliff-video']);
if ($videos->have_posts()) { ?>
  <h2 id="entry-title">Videos</h2>
  <section class="videos">
    <?php
    while ($videos->have_posts()) {
      $videos->the_post(); ?>

      <iliff-video
          permalink="<?= get_the_permalink() ?>"
          excerpt="<?= htmlentities(strip_tags(get_the_excerpt())) ?>"
          date="<?= get_the_date(get_option('date_format')) ?>"
          src="<?= get_the_post_thumbnail_url(null, 'large'); ?>"
          title="<?= htmlentities(get_the_title()) ?>"
          timestamp="<?= get_the_date('U') ?>"
      ></iliff-video>
    
    <?php } ?>
  </section>
<?php } ?>

<?php get_footer() ?>
