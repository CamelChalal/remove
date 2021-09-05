<?php /* 

Template Name: rse

*/
?>

<?php get_header() ?>

<!-- Carousel -->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_rse')) :
                    $i = 0;
                    while (have_rows('carousel_rse')) : the_row(); ?>
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
                <?php the_field('titre_carousel'); ?>
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
                <?php if (have_rows('carousel_rse')) :
                    $i = 0;
                    while (have_rows('carousel_rse')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<!-- bloc texte RSE -->

<div class="container">
    <h2 id="titre_rse"><?php the_field('titre_rse'); ?></h2>
    <div class="container_texte_rse">
        <p><?php the_field('paragraphe_1_rse'); ?> </p>
    </div>
</div>

<!-- bloc card RSE -->
<div class="container">
    <div class="container_card_profil container_card_rse">
        <?php if (have_rows('description_rse')) :
            $i = 1;
            while (have_rows('description_rse')) : the_row(); ?>

                <div class="card mb-3" style="background-color: <?php the_sub_field('couleur_de_fond'); ?>">
                    <div class="container_img_profil">
                        <img src="<?php the_sub_field('image'); ?>" alt="photo profil recherché">
                    </div>
                    <div class="card-body card_profil card_rse">
                        <?php the_sub_field('texte'); ?>
                    </div>
                </div>
            <?php $i++;
            endwhile; ?>
        <?php endif; ?>
    </div>
</div>


<?php get_footer() ?>