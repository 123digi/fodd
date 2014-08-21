<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
     <?php if ( has_post_thumbnail() ) { ?>
      <figure>
          <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( 'post-custom-sidebar-thumbnail', array('class' => 'img-responsive') ); ?>
          </a>
      </figure>
    <?php } ?>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>

    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
