<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div class="container">
    <header class="header" aria-labelledby="site-title">
        <a class="header-link site-title" href="/">
            <p id="site-title">Iliff+Healers Initiative</p>
        </a>
        <a class="header-link motto" href="/">
            <div class="motto">
                <blockquote class="screen-reader-text">
                    <p>We wake, if we wake at all, to mystery.</p>
                    <cite>Annie Dillard</cite>
                </blockquote>
            </div>
        </a>
    </header>
    
    <main id="content" aria-labelledby="entry-title">
        <?php the_post() ?>
        
        <h1 id="entry-title"><?php the_title() ?></h1>
        <?php the_content() ?>
    </main>
</div>

<footer class="site-footer">
    &copy; <?= date('Y') ?> Iliff+Healers Initiative
</footer>

<?php wp_footer() ?>
</body>
</html>
