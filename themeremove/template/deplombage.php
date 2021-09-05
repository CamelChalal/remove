<?php /* 

Template Name: deplombage

*/
?>

<?php get_header() ?>

<!-- Carousel-->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_deplombage')) :
                    $i = 0;
                    while (have_rows('carousel_deplombage')) : the_row(); ?>
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
                <?php the_field('titre_deplombage'); ?>
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
                <?php if (have_rows('carousel_deplombage')) :
                    $i = 0;
                    while (have_rows('carousel_deplombage')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<!-- bloc plomb-->

<div class="container">
    <div class="container_amiante" id="plomb">
        <div class="bloc_text_amiante">
            <h2 id="titre_plomb"><?php the_field('titre_plomb'); ?></h2>
            <p><?php the_field('texte_plomb'); ?></p>
            <!--<div class="btn_plus btn_amiante btn_plomb">
                <a class="btn " href="#" role="button">En savoir plus <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                        <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                    </svg>
                </a>
            </div>-->

        </div>
        <div class="img_amiante">
            <img src="<?php the_field('image_plomb'); ?>">
        </div>
    </div>
</div>

<!-- bloc savoir-faire -->
<div class="container_bckg">
    <div class="container">
        <h2 id="titre_savoir_faire"><?php the_field('titre_experience'); ?></h2>
        <div class="texte_deplombage_experience">
            <p><?php the_field('texte_savoir_faire'); ?></p>
        </div>
        <div class="container_savoir_faire" id="savoir_faire">

            <div class="container_image_plomb">
                <img src="<?php the_field('image1_savoir_faire'); ?>">
            </div>
            <div class="container_texte_plomb">
                <div class="container__accordeon_deplombage">
                    <?php if (have_rows('question_plomb_droite')) :
                        $i = 1;
                        while (have_rows('question_plomb_droite')) : the_row(); ?>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne<?php echo $i; ?>">
                                        <button class="accordion-button collapsed btn__accordeon" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="true" aria-controls="flush-collapsOne<?php echo $i; ?>" style="background-color:<?php the_sub_field('couleur'); ?> ">
                                            <?php the_sub_field('question'); ?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p><?php the_sub_field('reponse'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="container_image_plomb2 ordre_image">
                <img src="<?php the_field('image_2_savoir_faire'); ?>">
            </div>
            <div class="container_texte_plomb2">
                <div class="container__accordeon_deplombage">
                    <?php if (have_rows('question_plomb_gauche')) :
                        $i = 1;
                        while (have_rows('question_plomb_gauche')) : the_row(); ?>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                                        <button class="accordion-button collapsed btn__accordeon" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="flush-collapse<?php echo $i; ?>" style="background-color:<?php the_sub_field('couleur'); ?> ">
                                            <?php the_sub_field('question'); ?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <p><?php the_sub_field('reponse'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>


    </div>
</div>

<!-- bloc chronique intervention -->
<div class="container">
    <div class="container_video_intervention" id="chronique_intervention_plomb">
        <h2><?php the_field('titre_intervention_deplombage'); ?></h2>

        <?php the_field('video_intervention_deplombage'); ?>
    </div>
</div>


<?php get_footer() ?>