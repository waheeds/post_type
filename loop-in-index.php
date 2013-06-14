<?php query_posts('post_type=albums&posts_per_page=30&order=DESC'); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

yor albums post key loop here

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?> 
