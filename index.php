<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div class="container" id="vue-root">
        <header class="header" aria-labelledby="site-title">
            <a class="header-link site-title" href="<?php home_url() ?>">
                <h1 id="site-title">Iliff+Healers Initiative</h1>
            </a>
            <a class="header-link motto" href="<?php home_url() ?>">
                <div class="motto">
                    <blockquote class="screen-reader-text">
                        <p>We wake, if we wake at all, to mystery.</p>
                        <cite>Annie Dillard</cite>
                    </blockquote>
                </div>
            </a>
        </header>
    
        <main id="content" aria-labelledby="entry-title">
            <?php $videos = new WP_Query(['post_type' => 'iliff-video']);
            if ($videos->have_posts()) { ?>
                <h2 id="entry-title">Videos</h2>
                <section class="videos">
                    <?php while ($videos->have_posts()) {
                        $videos->the_post(); ?>
                        
                        <iliff-video
                            permalink="<?= get_the_permalink () ?>"
                            excerpt="<?= htmlentities(strip_tags(get_the_excerpt())) ?>"
                            date="<?= get_the_date(get_option('date_format')) ?>"
                            src="<?= get_the_post_thumbnail_url(null, 'large'); ?>"
                            title="<?= htmlentities(get_the_title()) ?>"
                            timestamp="<?= get_the_date('U') ?>"
                        ></iliff-video>
                       
                    <?php } ?>
                </section>
            <?php } ?>
        </main>
    </div>
    
    <footer class="site-footer">
        &copy; <?= date('Y') ?> Iliff+Healers Initiative
    </footer>
    
    <?php wp_footer() ?>
</body>
</html>
