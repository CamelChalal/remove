<?php get_header() ?>

<!-- Carousel -->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('images_carousel')) :
                    $i = 0;
                    while (have_rows('images_carousel')) : the_row(); ?>
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
                <?php the_field('titre_slider_accueil'); ?>
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
                <?php if (have_rows('images_carousel')) :
                    $i = 0;
                    while (have_rows('images_carousel')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<!-- bloc intro-->
<div class="container">
    <div class="intro">
        <div class="contain">

            <div class="logo_earth">
                <svg xmlns="http://www.w3.org/2000/svg" width="139.031" height="139.031" viewBox="0 0 139.031 139.031">
                    <g id="Groupe_218" data-name="Groupe 218" transform="translate(-452.751 -535.945)">
                        <path id="Tracé_36" data-name="Tracé 36" d="M591.286,597.265a63.828,63.828,0,1,1-57.92-60.429,69.641,69.641,0,1,0,57.92,60.429Z" transform="translate(0 0)" fill="#fff" />
                        <path id="Union_1" data-name="Union 1" d="M507.062,642.287c-5.179-8.809-6.128-13.466-6.151-27.68-3.881-1.838-12.257-7.7-10.253-14.866.474-1.7,1.618-2.535,2.043-4.613-3.387-1.156-4.345-5.373-7.177-6.664h-3.579a7.945,7.945,0,0,1-7.176-3.589c-1.43-1.951-2.1-6.153-3.077-8.2h-.513v1.538c.911.962.948.409.513,1.538-.746,1.3.11.578-1.538,1.021a29.329,29.329,0,0,1-4.613-13.836c1.869-1.9,2.19-4.169,3.589-6.664,2.284-4.086,13.34-16.218,18.966-16.4a6.613,6.613,0,0,0,4.1,2.564c.817-1.43,1.107-.784,2.564-1.538,3.412-1.765,4.946-1.111,6.392-.456a4.787,4.787,0,0,0,3.859.456l3.587-3.587h7.178c1.949,1.839,4.227,3.315,6.149,5.125-.323.9-.1.5-.511,1.021-1.007,2.257-3.34,3.093-6.664,3.076l.513-3.076h-3.077c-2.349,2.376-6.841,2.811-10.766,3.589a5.446,5.446,0,0,0-1.021,2.564c6.016.791,8.7-1.244,13.327-2.043,1.167,1.095,2.707,1.089,4.1,2.043s1.8,3.021,3.074,4.1l-.513,1.538c-10.649.688-15.73,5.924-20.5,12.3a43.588,43.588,0,0,0-3.587,4.1v4.1c-.409.652-1.146.257-2.043.513-1.06-3.779-3.7-3.839-8.715-3.589a6.035,6.035,0,0,1-2.564,1.021,10.477,10.477,0,0,0-1.021,5.125l.513.513c2.927.153,4.427-.74,7.689-1.021v1.021a20.706,20.706,0,0,1,1.538,6.151,7.258,7.258,0,0,0,4.613,1.538c1.081-3.091,5.567-3.115,9.227-2.043,7.211,2.1,8.854,6.022,12.3,9.74,4.539,2.9,11.691.163,11.789,7.689-4.071,2.7-2.462,6.576-4.613,11.276-2.572,5.62-13.91,11.818-14.866,15.891a20.856,20.856,0,0,1,3.587,10.251h-.106A17.449,17.449,0,0,1,507.062,642.287Zm47.159-45.62c-4.086-1.561-12.639-1.077-16.919-2.043-1.824-2.7-4.351-3.824-4.613-8.2a5.162,5.162,0,0,1,0-4.613c1.524-3.548,5.775-4.29,7.176-7.689-.75-1.209-.225-1.933,0-3.589a5.421,5.421,0,0,0,3.077-.513H540.9q-.254-2.819-.511-5.638l.511-.513c1.354-.123,4.88-.364,5.125-.513a8.079,8.079,0,0,0,.513-4.1,18.882,18.882,0,0,0,8.715-4.1c-2.842-1.471-4.271-2.558-3.074-5.638a11.948,11.948,0,0,1,4.1-1.538l5.638,5.638c7.185,9.744,11.789,19.816,11.789,36.908v11.781a61.042,61.042,0,0,1-5.125,13.328c-2.2,3.8-3.142,10.543-7.689,11.789C557.213,619.169,557.842,605.533,554.221,596.667Z" transform="translate(13.338 5.591)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="text_intro">
                <?php the_field('texte_intro_accueil'); ?>
                <div class="btn_plus">
                    <a href="<?php the_permalink(9) ?>" role="button">
                        <?php the_field('bouton_intro_accueil'); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                            <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                        </svg>
                    </a>
                </div>

            </div>

            <div class="btn_reseau_sociaux">
                <a href="<?php the_field('linkedin', 'option'); ?>" role="button" target="blank">Linkedin</a>
                <a href="<?php the_field('instagram', 'option'); ?>" role="button" target="blank">Instagram</a>
                <a href="<?php the_field('twitter', 'option'); ?>" role="button" target="blank">Twitter</a>
                <a href="<?php the_field('youtube', 'option'); ?>" role="button" target="blank">Youtube</a>
            </div>

        </div>

    </div>
</div>

<!--bloc nos activités-->
<section class="activite__home">

    <div class="container">
        <h2 class="title_activite">
            <?php the_field('titre_activite_accueil'); ?>
        </h2>

        <div class="cards_activite">
            <?php if (have_rows('activite_rep_accueil')) :
                $i = 1;
                while (have_rows('activite_rep_accueil')) : the_row(); ?>
                    <?php $link = get_sub_field('bouton'); ?>
                    <div class="card1">
                        <div class="card-body">
                            <img src="<?php the_sub_field('image'); ?>" class="card-img-top" alt="désamiantage">
                        </div>
                        <div class="card-body text_card">
                            <h5 class="card-title"><?php the_sub_field('titre'); ?></h5>
                            <p class="card-text">
                                <?php the_sub_field('texte'); ?>
                            </p>
                            <a href="<?php echo $link['url']; ?>" class="btn_card_activite">
                                <?php echo $link['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                    <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</section>

<!--bloc nos réalisations-->
<section class="real__home">
    <div class="container_bckg">
        <div class="container">
            <h2 class="title_réalisation"><?php the_field('titre_realisations_acc'); ?></h2>
            <div class="carousel_realisation">
                <div class="owl-carousel owl-theme carousel__real">
                    <?php $real_accueil = new WP_Query(array('post_type' => 'realisation', 'orderby' => 'date', 'posts_per_page' => '6')); ?>
                    <?php $i = 1;
                    while ($real_accueil->have_posts()) : $real_accueil->the_post(); ?>
                        <div>
                            <div class="card cards_home cards_accueil">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text description_actu">
                                        <?php $content = str_replace('&nbsp;', " ", get_the_excerpt());

                                        $content = preg_replace('/\s+/', ' ', $content);

                                        echo $content; ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn_card_real">
                                        En savoir plus
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
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
        </div>
    </div>
</section>

<!-- bloc ils nous font confiance-->

<div class="container">
    <h2 id="titre_partenaire">
        <?php the_field('titre_part_real'); ?>
    </h2>
    <div class="container_partenaire">
        <div class="owl-carousel owl-theme slider__part">
            <?php if (have_rows('partenaires')) :
                $i = 1;
                while (have_rows('partenaires')) : the_row(); ?>
                    <div class="item">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </div>
                <?php $i++;
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- bloc temoignages collaborateurs-->
<div class="container">
    <h2 id="titre_temoignages">
        <?php the_field('titre_tem_real'); ?>
    </h2>
    <div class="container_card_temoignage_collaborateur" id="temoignage">

        <?php if (have_rows('temoignages_rep')) :
            $i = 1;
            while (have_rows('temoignages_rep')) : the_row(); ?>

                <div class="card mb-3 p-2" style="background-color: <?php the_sub_field('couleur'); ?>;">
                    <div class="card-header bg-transparent border-bottom-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60.5" height="54.135" viewBox="0 0 64.5 54.135">
                            <defs>
                                <clipPath id="clip-path">
                                    <path id="Tracé_39" data-name="Tracé 39" d="M0,11.379H64.5V-42.757H0Z" transform="translate(0 42.757)" fill="#fff" />
                                </clipPath>
                            </defs>
                            <g id="Groupe_354" data-name="Groupe 354" transform="translate(0 42.757)">
                                <g id="Groupe_268" data-name="Groupe 268" transform="translate(0 -42.757)" clip-path="url(#clip-path)">
                                    <g id="Groupe_267" data-name="Groupe 267" transform="translate(0 -0.001)">
                                        <path id="Tracé_38" data-name="Tracé 38" d="M13.557,0C-.983-.3-14.474,12-13.873,30.44V54.132H13.557V26.692H1.566c0-4.349.9-7.647,2.848-10.047s4.947-3.9,9.144-4.5ZM-23.492,0C-38.032-.3-51.524,12-50.924,30.44V54.132h27.432V26.692H-35.485c0-4.349.9-7.647,2.849-10.047s4.947-3.9,9.144-4.5Z" transform="translate(50.943 0.004)" fill="#fff" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="card-body p-0 card_temoignage card_temoignage_collaborateur texte_temoignage test">
                        <?php the_sub_field('texte'); ?>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26.146" height="21.945" viewBox="0 0 26.146 21.945">
                                <defs>
                                    <clipPath id="clip-path">
                                        <path id="Tracé_46" data-name="Tracé 46" d="M0-20.812H26.146V-42.757H0Z" transform="translate(0 42.757)" fill="#fff" />
                                    </clipPath>
                                </defs>
                                <g id="Groupe_356" data-name="Groupe 356" transform="translate(26.146 21.945) rotate(180)" clip-path="url(#clip-path)">
                                    <g id="Groupe_355" data-name="Groupe 355" transform="translate(0 0)">
                                        <path id="Tracé_45" data-name="Tracé 45" d="M-24.8,0C-30.691-.124-36.16,4.861-35.916,12.337v9.6H-24.8V10.818h-4.861A6.252,6.252,0,0,1-28.5,6.745,5.54,5.54,0,0,1-24.8,4.921ZM-39.815,0c-5.894-.122-11.363,4.863-11.12,12.339v9.6h11.12V10.818h-4.861a6.252,6.252,0,0,1,1.155-4.073,5.54,5.54,0,0,1,3.707-1.824Z" transform="translate(50.943 0.004)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </p>
                        <div class="container_card_footer">
                            <div class="card-footer bg-transparent border-top-0 card_temoignage_footer card_temoignage_collaborateur_footer">
                                <?php the_sub_field('auteur'); ?>
                            </div>

                        </div>
                    </div>

                </div>

            <?php $i++;
            endwhile; ?>
        <?php endif; ?>


    </div>
</div>


<!-- bloc nos actualités-->
<section class="actu__home">

    <div class="container">
        <h2 class="title_activite"><?php the_field('titre_actualite_acc'); ?></h2>
        <div class="carousel_actu">
            <div class="owl-carousel owl-theme carousel__actu">
                <?php $actu_accueil = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'posts_per_page' => '6')); ?>
                <?php $i = 1;

                while ($actu_accueil->have_posts()) : $actu_accueil->the_post(); ?>
                    <div>
                        <div class="card cards_home cards_accueil">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text description_actu">
                                    <?php $content = str_replace('&nbsp;', " ", get_the_excerpt());

                                    $content = preg_replace('/\s+/', ' ', $content);

                                    echo $content; ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn_card_actu">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                        <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#686968" />
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
    </div>

</section>


<!--bloc recrutement-->
<!-- <section id="recrutement">
    <div class="container_bckg">
        <div class="container">
            <div class="container_recrutement">
                <h2 class="title_réalisation title__recrutement"><?php the_field('titre_recrutement_acc'); ?></h2>
                <div class="cards_recrutement">
                    <?php $recru_accueil = new WP_Query(array('post_type' => 'recrutement', 'orderby' => 'date', 'posts_per_page' => '4')); ?>
                    <?php $i = 1;
                    while ($recru_accueil->have_posts()) : $recru_accueil->the_post(); ?>
                        <div class="card cards_recruit">
                            <div class="card-body card_recruit">

                                <h5 class="card-title title_recrutement">
                                    <?php echo get_the_title(); ?>
                                </h5>

                                <p class="card-text color_text">
                                    <?php echo get_the_excerpt(); ?>
                                </p>

                                <a href="<?php the_permalink(31); ?>" class="btn_card_recruit">En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20">
                                        <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#00a445" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    <?php $i++;
                    endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--bloc contact-->

<section>

    <h2 class="title_activite"><?php the_field('titre_contact_acc'); ?></h2>
    <div class="container_bckg_footer">
        <div class="container_contact">
            <div class="contact_left">
                <div class="contact_adresse">
                    <h6>Adresse</h6>
                    <p><?php the_field('adresse', 'option'); ?></p>
                </div>
                <div class="contact_tel">
                    <h6>Téléphone</h6>
                    <a href="tel:<?php the_field('adresse', 'option'); ?>">
                        <?php the_field('telephone', 'option'); ?>
                    </a>
                </div>
                <div class="contact_mail">
                    <h6>E-mail</h6>
                    <a href="mailto:<?php the_field('e-mail', 'option'); ?>">
                        <?php the_field('e-mail', 'option'); ?>
                    </a>
                </div>
                <div class="contact_btn">
                    <a href="<?php the_permalink(31); ?>" class="btn_contact">Contactez-nous</a>
                </div>
            </div>
            <div class="contact_right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.4623989668626!2d2.645922615673399!3d48.83031807928472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60ff5a05ac523%3A0xad2dd5970a63c053!2sREMOVE%20FRANCE%20(D%C3%A9samiantage%20et%20D%C3%A9plombage)!5e0!3m2!1sfr!2sfr!4v1621614073258!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>