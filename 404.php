<?php get_template_part('templates/page', 'header'); ?>

<img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/not-found.png' ?>" class="img-responsive head" />

<h2>Esto es un poco embarazoso ¿no?</h2>
<p>Parece que no encontramos lo que estás intentado localizar. Es podible que te ayude buscarlo</p>

<?php get_search_form(); ?>
