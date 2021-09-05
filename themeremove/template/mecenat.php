<?php /* 

Template Name: mecenat

*/
?>

<?php get_header() ?>

<!-- Carousel -->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_mecenat')) :
                    $i = 0;
                    while (have_rows('carousel_mecenat')) : the_row(); ?>
                        <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                            <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="désamiantage chantier 1">
                        </div>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
                <div class="reseaux_sociaux_carousel">
                    <a href="<?php the_field('youtube', 'option'); ?>" target="blank">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/youtube.png" alt="lien vers youtube/remove" style="width: 32px;">
                    </a>
                    <a href="<?php the_field('instagram', 'option'); ?>" target="blank">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram.png" alt="lien vers instagram/remove" style="width: 32px;">
                    </a>
                    <a href="<?php the_field('linkedin', 'option'); ?>" target="blank">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png" alt="lien vers linkedin/remove" style="width: 32px;">
                    </a>
                    <a href="<?php the_field('twitter', 'option'); ?>" target="blank">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png" alt="lien vers twitter/remove" style="width: 32px;">
                    </a>
                </div>
            </div>

            <div class="title_carousel">
                <?php the_field('titre_carousel_mecenat'); ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/arrow_left.png" alt="" style="width: 32px;">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/arrow_right.png" alt="" style="width: 32px;">
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <?php if (have_rows('carousel_mecenat')) :
                    $i = 0;
                    while (have_rows('carousel_mecenat')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<!-- Contenu page -->


<div class="container_bckg">
    <div class="container">
        <div class="container_all_mecenat">
            <div class="container_image_mecenat">
                <img src="<?php the_field('image_1_mecenat'); ?>" alt="photo plomb">
            </div>
            <div class="texte1_mecenat">
                <?php the_field('description_1_mecenat'); ?>
            </div>

            <div class="container_bloc2">
                <div class="container_image_mecenat img_bloc2">
                    <img src="<?php the_field('image_2_mecenat'); ?>">
                </div>
                <div class="texte2_mecenat">
                    <?php the_field('description_2_mecenat'); ?>
                </div>
            </div>
            <div class="container_bloc3">
                <div class="container_image_mecenat container_iframe_mecenat">
                    <?php the_field('video_mecenat'); ?>
                </div>
                <div class="texte3_mecenat">
                    <?php the_field('description_3_mecenat'); ?>
                </div>
            </div>
            <div class="container_bloc2">
                <div class="texte2_mecenat">
                    <?php the_field('description_4_mecenat'); ?>
                </div>
                <div class="container_image_mecenat container_iframe_mecenat">
                    <?php the_field('video_2_mecenat'); ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer() ?>