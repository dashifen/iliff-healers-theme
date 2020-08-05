<?php
/**
 * Template Name: Contact Form
 */

use Dashifen\ContactForm\ContactForm;
use Dashifen\ContactForm\ContactFormException;

get_header(); ?>

<section class="body"><?php the_content() ?></section>
<section class="contact-form">
  <?php try {
    ContactForm::display();
  } catch (ContactFormException $e) { ?>
    <p>Unable to load contact form.</p>
  <?php } ?>
</section>

<?php get_footer() ?>
