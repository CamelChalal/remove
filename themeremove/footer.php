<?php

/**
 * The template for displaying the header
 * @package Wordpress
 * @subpackage Removekeima
 * @since Removekeima 1.0
 */
?>

<footer>


    <div class="footer">
        <div class="container_all">
            <div class="menu_footer">
                <div class="container_ul_footer">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'menu-footer',
                    )); ?>


                </div>

                <div class="info_footer">
                    <div class="contact_footer">
                        <h5><a href="<?php the_permalink(31) ?>">Contact</a></h5>
                    </div>
                    <div class="recherche_footer">

                        <button class="btn_footer" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a><i class="fa fa-search fa_footer"></i></a>
                        </button>

                    </div>
                    <div class="langue_footer">
                        <a href="https://www.remove-canada.ca/" target="blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g id="Groupe_224" data-name="Groupe 224" transform="translate(-1450 -4897)" opacity="0.401">
                                    <circle id="Ellipse_18" data-name="Ellipse 18" cx="16" cy="16" r="16" transform="translate(1450 4897)" fill="#fff" />
                                    <g id="Groupe_223" data-name="Groupe 223" transform="translate(-304.136 4855.731)">
                                        <g id="Groupe_216" data-name="Groupe 216" transform="translate(1754.136 43.269)">
                                            <g id="Groupe_159" data-name="Groupe 159" transform="translate(9.654 6.896)">
                                                <path id="Tracé_35" data-name="Tracé 35" d="M351.537,249.125l-.165-2.939c0-.476.207-.476.435-.435s2.939.5,2.939.5a4.656,4.656,0,0,1-.321-1.056c0-.372.8-.89,1.666-1.655s1.469-1.159,1.469-1.242-.621-.062-.621-.517a13.707,13.707,0,0,1,.579-2.152,9.876,9.876,0,0,1-1.552.414c-.331,0-.848-.6-.848-1.076,0,0-1.593,2.007-1.924,1.862s.6-4.077.6-4.077-.952.807-1.283.7-1.262-2.4-1.262-2.4-.015-.03-.035-.03-.034.03-.034.03-.931,2.3-1.262,2.4-1.283-.7-1.283-.7.931,3.932.6,4.077-1.924-1.862-1.924-1.862c0,.476-.517,1.076-.849,1.076a9.873,9.873,0,0,1-1.552-.414,13.709,13.709,0,0,1,.579,2.152c0,.455-.621.434-.621.517s.6.476,1.469,1.242S348,244.82,348,245.193a4.656,4.656,0,0,1-.321,1.056s2.711-.455,2.939-.5.435-.041.435.435l-.166,2.939Z" transform="translate(-344.867 -235.023)" fill="#cf000c" />
                                            </g>
                                            <path id="Soustraction_9" data-name="Soustraction 9" d="M24,27.893V0a16.147,16.147,0,0,1,0,27.893Zm-16,0H8A16.147,16.147,0,0,1,8,0V27.893Z" transform="translate(0)" fill="#cf000c" />
                                        </g>
                                    </g>
                                </g>
                            </svg>

                        </a>
                    </div>




                    <div class="reseaux_sociaux_footer">
                        <a href="<?php the_field('youtube', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/youtube.png" alt=""></a>
                        <a href="<?php the_field('instagram', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram.png" alt=""></a>
                        <a href="<?php the_field('linkedin', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin.png" alt=""></a>
                        <a href="<?php the_field('twitter', 'option'); ?>" target="blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter.png" alt=""></a>

                    </div>
                </div>
            </div>
            <div class="bas_footer">
                <ul>
                    <li><a href="<?php the_permalink(835) ?>">Mentions Légales</a></li>
                    <li><a href="#">Accessibilité</a></li>
                </ul>
            </div>

        </div>





</footer>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.readall.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/index_js.js"></script>

<script>
    let body = document.getElementById("body");
    let open = document.getElementById("open");

    open.addEventListener('click', function() {
        body.classList.toggle("hidden")
    })
</script>
<script>
    $(document).ready(function() {
        $('.test').readall({
            // Default values
            showheight: 87, // height to show
            showrows: null, // rows to show (overrides showheight)
            animationspeed: 200, // speed of transition
            btnTextShowmore: 'Lire plus', // text shown on button to show more
            btnTextShowless: 'Lire moins', // text shown on button to show less
            btnClassShowmore: 'readall-button', // class(es) on button to show more
            btnClassShowless: 'readall-button' // class(es) on button to show less
        });
    });
</script>

<?php wp_footer(); ?>


</body>

</html>