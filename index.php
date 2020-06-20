<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header class="header" aria-labelledby="site-title">
        <h1 id="site-title">Iliff+Healers Initiative</h1>
        <div class="motto">
            <blockquote class="screen-reader-text">
                <p>We wake, if we wake at all, to mystery.</p>
                <cite>Annie Dillard</cite>
            </blockquote>
        </div>
    </header>
    
    <main>
        <?php $videos = new WP_Query(['post_type' => 'iliff-videos']);
        if ($videos->have_posts()) { ?>
            <section class="videos">
                <?php while ($videos->have_posts()) {
                    $videos->the_post(); ?>
                
                    <article class="video">
                        <header><?php the_title() ?></header>
                        <?php the_excerpt() ?>
                        <footer>
                            <time datetime="<?php the_date('U') ?>">
                                <?php the_date() ?>
                            </time>
                        </footer>
                    </article>
                <?php } ?>
            </section>
        <?php } ?>
    </main>
    
    <footer class="site-footer">
        &copy; <?= date('Y') ?> Iliff+Healers Initiative
    </footer>
    
    <?php wp_footer() ?>
</body>
</html>
