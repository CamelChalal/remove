    <?php /* 

    Template Name: actualites

    */
    ?>

    <?php get_header() ?>

    <!-- Carousel -->
    <div class="container_bckg">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php if (have_rows('carousel_actu')) :
                        $i = 0;
                        while (have_rows('carousel_actu')) : the_row(); ?>

                            <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                                <img src="<?php the_sub_field('image'); ?>" class="d-block w-100" alt="désamiantage chantier 1">
                            </div>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>

                    <div class="reseaux_sociaux_carousel">
                        <a href="<?php the_field('youtube', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/youtube.png" alt="lien vers youtube/remove" style="width: 32px;"></a>
                        <a href="<?php the_field('instagram', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram.png" alt="lien vers instagram/remove" style="width: 32px;"></a>
                        <a href="<?php the_field('linkedin', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png" alt="lien vers linkedin/remove" style="width: 32px;"></a>
                        <a href="<?php the_field('twitter', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png" alt="lien vers twitter/remove" style="width: 32px;"></a>
                    </div>
                </div>

                <div class="title_carousel">
                    <?php the_field('titre_carousel_actu'); ?>

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
                    <?php if (have_rows('carousel_actu')) :
                        $i = 0;
                        while (have_rows('carousel_actu')) : the_row(); ?>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                        <?php $i++;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>




    <!-- bloc actualités -->

    <div class="container_bckg">
        <div class="container">
            <div class="bloc_haut_actualite">
                <div class="actu_desamiantage">
                    <h5>Désamiantage</h5>
                </div>
                <div class="actu_deplombage">
                    <h5>Déplombage</h5>
                </div>
                <div class="actu_curage">
                    <h5>Dépollution</h5>
                </div>
            </div>

            <div class="owl-carousel owl-theme slider__actu">
                <?php $actu = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'posts_per_page' => '5')); ?>
                <?php $i = 1;
                while ($actu->have_posts()) : $actu->the_post(); ?>
                    <div class="item">
                        <div class="card cards_home card__actu">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                            <div class="card-body card_page_actu">

                                <?php if (in_category('curage')) : ?>
                                    <h5 class="card-title" style="color: #A8A9AC"><?php the_title(); ?></h5>

                                    <p class="card-text description_page_actu">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" style="background-color: #A8A9AC">En savoir plus
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                            <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#FFFFFF" />
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <?php if (in_category('desamiantage')) : ?>

                                    <h5 class="card-title" style="color: #263152"><?php the_title(); ?></h5>

                                    <p class="card-text description_actu">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>

                                    <a href="<?php the_permalink(); ?>" style="background-color: #263152">En savoir plus
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                            <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#FFFFFF" />
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <?php if (in_category('deplombage')) : ?>

                                    <h5 class="card-title" style="color: #00A445"><?php the_title(); ?></h5>

                                    <p class="card-text description_actu">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" style="background-color: #00A445">En savoir plus
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                            <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#FFFFFF" />
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php $i++;
                endwhile; ?>
            </div>


        </div>
    </div>


    <?php get_footer() ?>