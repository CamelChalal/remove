<?php get_header() ?>



<div class="container">
    <hr>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">

                <h1 class="title_activite"><?php the_title(); ?></h1>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <p class="post-info">
                    Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
                </p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>
<?php get_footer() ?>