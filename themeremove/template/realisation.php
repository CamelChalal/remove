<?php /* 

Template Name: nos réalisations

*/
?>

<?php
get_header();

if (isset($_GET['cat-articles'])) {
    $cat_filtre = $_GET['cat-articles'];
}
?>

<!-- Carousel-->
<div class="container_bckg">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if (have_rows('carousel_realisation')) :
                    $i = 0;
                    while (have_rows('carousel_realisation')) : the_row(); ?>
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
                <?php the_field('titre_real'); ?>
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
                <?php if (have_rows('carousel_realisation')) :
                    $i = 0;
                    while (have_rows('carousel_realisation')) : the_row(); ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>" aria-current="true" aria-label="Slide"></button>
                    <?php $i++;
                    endwhile; ?>
                <?php endif; ?>
            </div>


        </div>
    </div>
</div>




<!-- bloc chantier en étapes-->
<div class="container">
    <div class="bloc_press_remove" id="reference">
        <?php the_field('texte_intro_real'); ?>
    </div>
</div>



<!-- bloc succes story-->

<div class="container_bckg">

    <div class="container">

        <div class="recherche_realisation" id="succes_story">
            <div class="container__text">
                <h5>Success Stories</h5>
                <div class="filtre">
                    <p>Filtrer par :</p>

                    <form method="get" action="#current_filtres">
                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'real_categories',
                            'orderby' => 'name',
                            'order'   => 'ASC',
                            'hide_empty' => 1,
                        ));


                        foreach ($categories as $category) : ?>
                            <input name="cat-articles" type="submit" value="<?php echo $category->name; ?>">
                        <?php endforeach; ?>

                    </form>
                </div>
            </div>
        </div>

        <div class="container_all_succes_story">

            <?php if (!isset($_GET['cat-articles']) || $_GET['cat-articles'] === '') : ?>
                <?php $post_filtres = new WP_Query(array(
                    'post_type' => 'realisation',
                    'posts_per_page' => '-1'
                )); ?>

            <?php else : ?>

                <?php $post_filtres = new WP_Query(array(
                    'post_type' => 'realisation',
                    'tax_query' =>  array(
                        array(
                            'taxonomy' => 'real_categories',
                            'field' => 'name',
                            'terms' => $cat_filtre,

                        )
                    ),
                    'posts_per_page' => '-1'
                )); ?>
            <?php endif; ?>


            <?php if ($post_filtres->have_posts()) : ?>
                <?php $j = 1; ?>
                <?php while ($post_filtres->have_posts()) : $post_filtres->the_post(); ?>
                    <div class="card cards_home">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>
                                <?php the_title(); ?>
                            </h5>
                            <p>
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn_card_activite btn_succes_story ">En savoir plus
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 20 20" style="margin-left: 5px;">
                                    <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                                </svg>


                            </a>
                        </div>
                    </div>
                    <?php $j++; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="filter_no_result">
                    <p>Aucun articles ne correspond à votre recherche !</p>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>

    </div>
</div>






<?php get_footer() ?>