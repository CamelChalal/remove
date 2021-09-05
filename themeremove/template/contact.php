<?php /* 

Template Name: contact

*/
?>

<?php get_header() ?>

<!-- Carousel -->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_contact')) :
                    $i = 0;
                    while (have_rows('carousel_contact')) : the_row(); ?>
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
                <?php the_field('titre_contact'); ?>
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
                <?php if (have_rows('carousel_contact')) :
                    $i = 0;
                    while (have_rows('carousel_contact')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<!--bloc coordonnee-->

<section>

    <h2 class="title_activite">coordonnées</h2>
    <div class="container_bckg_footer container_coordonnee">
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
            </div>
            <div class="contact_right map_contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.4623989668626!2d2.645922615673399!3d48.83031807928472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60ff5a05ac523%3A0xad2dd5970a63c053!2sREMOVE%20FRANCE%20(D%C3%A9samiantage%20et%20D%C3%A9plombage)!5e0!3m2!1sfr!2sfr!4v1621614073258!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>


<!--bloc contact-->
<div class="container_bckg">
    <div class="container">
        <div class="container_form">

            <?php echo do_shortcode('[ninja_form id=2]'); ?>

        </div>

    </div>
</div>

<?php get_footer() ?>