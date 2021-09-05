<?php /* 

Template Name: recrutement

*/
?>

<?php get_header() ?>

<!-- Carousel -->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_recrutement')) :
                    $i = 0;
                    while (have_rows('carousel_recrutement')) : the_row(); ?>
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
                <?php the_field('titre_carousel_recrut'); ?>
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
                <?php if (have_rows('carousel_recrutement')) :
                    $i = 0;
                    while (have_rows('carousel_recrutement')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>



<!-- Mot du DRH-->
<div class="container">
    <div class="container_mot_drh" id="mot_du_drh">
        <div class="bloc_text_drh">
            <?php the_field('texte_intro_recrut'); ?>

        </div>
        <div class="img_drh">
            <img src="<?php the_field('image_intro_recrut'); ?>" alt="photo amiante">
        </div>
    </div>
    <a href="<?php the_permalink(31) ?>" class="btn btn-lg btn_candidature" tabindex="-1" role="button" aria-disabled="true">Candidature spontanée</a>

</div>


<!-- bloc profil recherché-->

<div class="container">
    <h2 id="titre_recherche">
        <?php the_field('titre_profils'); ?>
    </h2>

    <div class="container_card_profil container_card_rse" id="profil_rechercher">
        <?php if (have_rows('profils_recherches')) :
            $i = 1;
            while (have_rows('profils_recherches')) : the_row(); ?>
                <div class="card mb-3" style="background-color: <?php the_sub_field('couleurs_de_fond'); ?>">
                    <div class="container_img_profil">
                        <img src="<?php the_sub_field('image'); ?>" alt="photo profil recherché">
                    </div>
                    <div class="card-body card_profil card_rse">
                        <?php the_sub_field('texte'); ?>

                        <a href="<?php the_permalink(31) ?>" class="btn_card_intervention1 btn_profil" style="color: <?php the_sub_field('couleurs_de_fond'); ?>">
                            POSTULER
                        </a>
                    </div>
                </div>

            <?php $i++;
            endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<!-- bloc postes à pourvoir -->

<div class="container">
    <div class="container_candidature">
        <h2>
            <?php the_field('titre_postes_pourvoir'); ?>
        </h2>
        <div class="container_video_recrutement">
            <?php if (have_rows('video_recrutement')) :
                $i = 1;
                while (have_rows('video_recrutement')) : the_row(); ?>

                    <?php the_sub_field('video'); ?>

                <?php $i++;
                endwhile; ?>
            <?php endif; ?>

        </div>


    </div>
</div>



<?php get_footer() ?>