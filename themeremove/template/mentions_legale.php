<?php /* 

Template Name: mentions legales

*/
?>

<?php get_header() ?>

<div class="container_all_mention">
    <h2> <?php the_field('titre'); ?> </h2>

    <div class="container">
        <div class="container_mentions">
            <?php the_field('mentions_legales'); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>