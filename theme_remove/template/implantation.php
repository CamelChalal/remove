<?php /* 

Template Name: implantation

*/
?>

<?php get_header() ?>

<!-- Carousel-->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_implantation')) :
                    $i = 0;
                    while (have_rows('carousel_implantation')) : the_row(); ?>
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
                <?php the_field('titre_implantation'); ?>
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
                <?php if (have_rows('carousel_implantation')) :
                    $i = 0;
                    while (have_rows('carousel_implantation')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- bloc card intervention -->
<!-- <div class="container">
    <h2 id="titre_remove_france">Remove France</h2>
    <div class="container_card_profil">
        <?php if (have_rows('encart_imp')) :
            $i = 1;
            while (have_rows('encart_imp')) : the_row(); ?>
                <div class="card mb-3" style="background-color: <?php the_sub_field('couleur_fond'); ?>">
                    <div class="row g-0 container_all_card_remove">
                        <div class="col-md-6 container_img_profil container_img_implantation">
                            <img class="img_border img_implantation" src="<?php the_sub_field('image'); ?>" alt="photo profil recherché">
                        </div>
                        <div class="col-md-6 container_texte_implantation">
                            <div class="card-body card_profil card_rse card_remove_implantation">
                                <?php the_sub_field('texte'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++;
            endwhile; ?>
        <?php endif; ?>
    </div>
</div> -->


<!-- bloc photo building -->
<div class="container_bckg">
    <div class="container">
        <h2 id="titre_building">
            <?php the_field('titre_lieux'); ?>
        </h2>
        <div class="logo_implantation">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/logo_remove.png" alt="logo remove" title="logo remove">
        </div>
        <div class="container_img_building">
            <?php if (have_rows('lieux_rep')) :
                $i = 1;
                while (have_rows('lieux_rep')) : the_row(); ?>
                    <div class="item">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                        <h6>
                            <?php the_sub_field('texte'); ?>
                        </h6>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- bloc nos projets -->
<!-- <div class="container">
    <h2 id="titre_nos_projets">
        <?php the_field('titre_projet'); ?>
    </h2>
    <div class="container_all_projet">
        <div class="texte_projet">
            <?php the_field('texte_projet'); ?>
        </div>
        <div class="owl-carousel owl-theme slider__projet">
            <?php $projet = new WP_Query(array('post_type' => 'projet', 'orderby' => 'date', 'posts_per_page' => '-1')); ?>
            <?php $i = 1;
            while ($projet->have_posts()) : $projet->the_post(); ?>
                <div>
                    <div class="card">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                        <div class="card-body card_projet">
                            <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                            <p class="card-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn_card_real btn_succes_story btn__projet">
                                En savoir plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 20 20" style="margin-left: 5px;">
                                    <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php $i++;
            endwhile; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>

</div> -->




<?php get_footer() ?>