<?php get_template_part('templates/page', 'header'); ?>

<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/not-found.png' ?>" class="img-responsive head" />

<h2><?php _e('Sorry, but the page you were trying to view does not exist.', 'roots'); ?></h2>

<?php get_search_form(); ?>
