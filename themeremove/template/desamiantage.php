<?php /* 

Template Name: désamiantage

*/
?>

<?php get_header() ?>

<!-- Carousel-->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_desamiantage')) :
                    $i = 0;
                    while (have_rows('carousel_desamiantage')) : the_row(); ?>
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
                <?php the_field('titre_desamiantage'); ?>
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
                <?php if (have_rows('carousel_desamiantage')) :
                    $i = 0;
                    while (have_rows('carousel_desamiantage')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<!-- bloc amiante-->

<div class="container">
    <div class="container_amiante" id="amiante">
        <div class="bloc_text_amiante">
            <?php the_field('texte_amiante'); ?>


        </div>
        <div class="img_amiante">
            <img src="<?php the_field('image_amiante'); ?>" alt="photo amiante">
        </div>
    </div>
</div>

<!-- bloc domaine d'intervention -->
<div class="container">
    <div class="container_intervention" id="domaine_intervention">
        <h2><?php the_field('titre_section'); ?></h2>
        <div class="bloc_haut_intervention">
            <?php if (have_rows('nom_dintervention')) :
                $i = 1;
                while (have_rows('nom_dintervention')) : the_row(); ?>

                    <div class="lieu_intervention">
                        <h5><?php the_sub_field('titre'); ?></h5>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>


        </div>
        <div class="container_card_intervention">
            <?php if (have_rows('expertise_desamiantage')) :
                $i = 1;
                while (have_rows('expertise_desamiantage')) : the_row(); ?>
                    <div class="card text-center" style="background-color:<?php the_sub_field('couleur_de_fond'); ?> ">
                        <div class="card-body">
                            <div class="picto">
                                <img src="<?php the_sub_field('pictogramme'); ?>" alt="">
                            </div>
                            <h5 class="card-title titre_intervention">
                                <?php the_sub_field('titre'); ?>
                            </h5>
                            <p class="card-text">
                                <?php the_sub_field('texte'); ?>
                            </p>
                        </div>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- bloc en pratique -->

<div class="container_bckg">
    <div class="container">
        <div class="container_en_pratique" id="en_pratique">
            <div class="text_en_pratique texte__desamiantage">
                <div class="container__accordeon">
                    <?php if (have_rows('question_en_pratique')) :
                        $i = 1;
                        while (have_rows('question_en_pratique')) : the_row(); ?>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                                        <button class="accordion-button collapsed btn__accordeon" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="flush-collapse<?php echo $i; ?>" style="background-color:<?php the_sub_field('couleur'); ?> ">
                                            <?php the_sub_field('question'); ?>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body"> <?php the_sub_field('reponse'); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>


                </div>
                <div class="img_en_pratique">
                    <img src="<?php the_field('image'); ?>" alt="photo amiante">
                </div>

            </div>
        </div>
    </div>
</div>

<!-- bloc chronique intervention -->
<div class="container">
    <div class="container__all_section">
        <!-- bloc accordéon process 5 étapes-->
        <div class="container_process5etapes">
            <div class="title_nos_chantier"><?php the_field('titre'); ?></div>
            <div class="container__accordeon_realisation">
                <?php if (have_rows('chantier_rep')) :
                    $j = 1;
                    while (have_rows('chantier_rep')) : the_row(); ?>
                        <div class="accordion accordion-flush" id="accordionFlushExample2">

                            <div class="accordion-item">
                                <h2 class="accordion-header accordeon_real" id="flush-heading2<?php echo $j; ?>">
                                    <img src="<?php the_sub_field('picto'); ?>" alt="">
                                    <button class="accordion-button collapsed  btn_accordeon__realisation" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2<?php echo $j; ?>" aria-expanded="true" aria-controls="flush-collapse2<?php echo $j; ?>">
                                        <?php the_sub_field('titre'); ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse2<?php echo $j; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading2<?php echo $j; ?>" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body body_real"> <?php the_sub_field('description'); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php $j++;
                    endwhile; ?>
                <?php endif; ?>


            </div>
        </div>

        <div class="container_video_intervention" id="chronique_intervention_amiante">
            <h2><?php the_field('titre_intervention'); ?></h2>

            <?php the_field('video_intervention'); ?>
        </div>
    </div>
</div>


<?php get_footer() ?>