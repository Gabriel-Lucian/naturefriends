<?php

get_header(); ?>
<div id="content">
    <main>
<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php echo get_the_date(); ?> | <?php echo get_the_category_list(', '); ?></p>
        <?php the_content(); ?>
    <?php
    endwhile;
else:
    echo '<p>No posts found. </p>';
endif; ?>

</main>

<?php get_sidebar(); ?>

</div> <!-- content -->
<?php
get_footer();

?>




