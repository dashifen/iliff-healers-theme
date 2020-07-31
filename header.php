<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  wp_head();
  the_post();
  ?>
</head>
<body <?php body_class() ?>>
<div class="container" id="vue-root">
  <header class="header" aria-labelledby="site-title">
    <section class="site-title-and-menu">
      <a class="header-link site-title" href="<?php home_url() ?>">
        <h1 id="site-title">Iliff+Healers Initiative</h1>
      </a>
      <nav class="main-menu menu"><?php wp_nav_menu(['menu' => 'main-menu']) ?></nav>
    </section>
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
