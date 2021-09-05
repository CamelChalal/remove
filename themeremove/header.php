    <?php

    /**
     * The template for displaying the header
     * @package Wordpress
     * @subpackage Removekeima
     * @since Removekeima 1.0
     */
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery-ui.css">
        <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/jquery.readall.css"> -->

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.default.min.css">

        <title><?php bloginfo('name'); ?></title>
        <?php wp_head() ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DTNYQSHMSQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DTNYQSHMSQ');
</script>
        
    </head>

    <body id="body">

        <header class="container">
            <nav class="menu_header">
                <div class="container_all_header">
                    <a class="logo" href="<?php the_permalink(7) ?>">
                        <img class="logotype" src="<?php bloginfo('template_directory') ?>/assets/images/bb_logo_remove.gif" alt="">
                    </a>

                    <div class="container_nav">
                        <input id="nav-toggle" type="checkbox" />
                        <label id="open" for="nav-toggle" class="burger">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </label>
                        <ul class="liste_ul menu-links ">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'menu-header',
                            )); ?>

                            <li id="contact">
                                <div class="contact_header">
                                    <a href="<?php the_permalink(31) ?>">Contact</a>
                                </div>
                            </li>
                            <li id="search1">

                                <button class="search_form" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <a><i class="fa fa-search"></i></a>
                                </button>

                            </li>
                            <li class="langue">
                                <a href="https://www.remove-canada.ca/" target="blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27.719" viewBox="0 0 32 27.719">
                                        <g id="Groupe_217" data-name="Groupe 217" transform="translate(-1754.136 -43.269)">
                                            <g id="Groupe_216" data-name="Groupe 216">
                                                <g id="Groupe_159" data-name="Groupe 159" transform="translate(26.266 8.96)">
                                                    <path id="Tracé_35" data-name="Tracé 35" d="M351.537,249.125l-.165-2.939c0-.476.207-.476.435-.435s2.939.5,2.939.5a4.656,4.656,0,0,1-.321-1.056c0-.372.8-.89,1.666-1.655s1.469-1.159,1.469-1.242-.621-.062-.621-.517a13.707,13.707,0,0,1,.579-2.152,9.876,9.876,0,0,1-1.552.414c-.331,0-.848-.6-.848-1.076,0,0-1.593,2.007-1.924,1.862s.6-4.077.6-4.077-.952.807-1.283.7-1.262-2.4-1.262-2.4-.015-.03-.035-.03-.034.03-.034.03-.931,2.3-1.262,2.4-1.283-.7-1.283-.7.931,3.932.6,4.077-1.924-1.862-1.924-1.862c0,.476-.517,1.076-.849,1.076a9.873,9.873,0,0,1-1.552-.414,13.709,13.709,0,0,1,.579,2.152c0,.455-.621.434-.621.517s.6.476,1.469,1.242S348,244.82,348,245.193a4.656,4.656,0,0,1-.321,1.056s2.711-.455,2.939-.5.435-.041.435.435l-.166,2.939Z" transform="translate(1392.657 -193.906)" fill="#cf000c" />
                                                </g>
                                                <path id="Soustraction_9" data-name="Soustraction 9" d="M-188-167.14v-27.719a16.091,16.091,0,0,1,5.794,5.746A15.986,15.986,0,0,1-180-181a15.986,15.986,0,0,1-2.206,8.113A16.091,16.091,0,0,1-188-167.141Zm-16,0h0a16.1,16.1,0,0,1-5.792-5.746A15.984,15.984,0,0,1-212-181a15.984,15.984,0,0,1,2.207-8.113A16.1,16.1,0,0,1-204-194.859v27.719Z" transform="translate(1966.137 238.129)" fill="#cf000c" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>

                            <li class="infos__mobile">
                                <div class="contact_header">
                                    <a href="<?php the_permalink(31) ?>">Contact</a>
                                </div>

                                <button class="search_form" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <a><i class="fa fa-search"></i></a>
                                </button>

                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27.719" viewBox="0 0 32 27.719">
                                        <g id="Groupe_217" data-name="Groupe 217" transform="translate(-1754.136 -43.269)">
                                            <g id="Groupe_216" data-name="Groupe 216">
                                                <g id="Groupe_159" data-name="Groupe 159" transform="translate(26.266 8.96)">
                                                    <path id="Tracé_35" data-name="Tracé 35" d="M351.537,249.125l-.165-2.939c0-.476.207-.476.435-.435s2.939.5,2.939.5a4.656,4.656,0,0,1-.321-1.056c0-.372.8-.89,1.666-1.655s1.469-1.159,1.469-1.242-.621-.062-.621-.517a13.707,13.707,0,0,1,.579-2.152,9.876,9.876,0,0,1-1.552.414c-.331,0-.848-.6-.848-1.076,0,0-1.593,2.007-1.924,1.862s.6-4.077.6-4.077-.952.807-1.283.7-1.262-2.4-1.262-2.4-.015-.03-.035-.03-.034.03-.034.03-.931,2.3-1.262,2.4-1.283-.7-1.283-.7.931,3.932.6,4.077-1.924-1.862-1.924-1.862c0,.476-.517,1.076-.849,1.076a9.873,9.873,0,0,1-1.552-.414,13.709,13.709,0,0,1,.579,2.152c0,.455-.621.434-.621.517s.6.476,1.469,1.242S348,244.82,348,245.193a4.656,4.656,0,0,1-.321,1.056s2.711-.455,2.939-.5.435-.041.435.435l-.166,2.939Z" transform="translate(1392.657 -193.906)" fill="#cf000c" />
                                                </g>
                                                <path id="Soustraction_9" data-name="Soustraction 9" d="M-188-167.14v-27.719a16.091,16.091,0,0,1,5.794,5.746A15.986,15.986,0,0,1-180-181a15.986,15.986,0,0,1-2.206,8.113A16.091,16.091,0,0,1-188-167.141Zm-16,0h0a16.1,16.1,0,0,1-5.792-5.746A15.984,15.984,0,0,1-212-181a15.984,15.984,0,0,1,2.207-8.113A16.1,16.1,0,0,1-204-194.859v27.719Z" transform="translate(1966.137 238.129)" fill="#cf000c" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Saisissez votre recherche</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php the_permalink(get_page_by_path('recherche')); ?>" method="get" class="search">
                                <input class="input_search" type="text" aria-label="Search" name="termtosearch" id="search" value="<?php the_search_query(); ?>">
                                <button type="submit" class="bouton_recherche"><a class="btn_card_activite btn_modal">Rechercher
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 20 20" style="margin-left: 5px;">
                                            <path id="Arrow_Right_Active" data-name="Arrow Right Active" d="M10,20A10,10,0,1,0,0,10,10.011,10.011,0,0,0,10,20ZM10,2a7.99,7.99,0,0,1,5.65,13.65A7.99,7.99,0,1,1,4.35,4.35,7.943,7.943,0,0,1,10,2Zm0,11.72h0l4.64-4.66L13.22,7.64,10,10.86,6.78,7.64,5.36,9.06,10,13.719Z" transform="translate(0 20) rotate(-90)" fill="#fff" />
                                        </svg>
                                    </a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header>