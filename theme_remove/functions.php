<?php

function montheme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

function montheme_register_assets()
{

    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css");
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js", ["popper", "jquery"], false, true);
    wp_register_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", [], false, true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/d3669e4fd3.js" crossorigin="anonymous');
    wp_enqueue_script('jquery');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/assets/js/jquery.readall.js', false);
    wp_enqueue_script('javascript',  get_template_directory_uri() . '/assets/js/index_js.js', false);
    wp_enqueue_style('style',  get_template_directory_uri() . '/assets/css/style.css', false);
}

add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_assets');


function codex_custom_init()
{

    // PRESSE
    $labels = array(
        'name' => 'Presse',
        'singular_name' => 'Presse',
        'add_new' => 'Ajouter un article de presse',
        'add_new_item' => 'Ajouter un nouvel article de presse ',
        'edit_item' => 'Editer un article de presse',
        'new_item' => 'Nouvel article de presse',
        'all_items' => 'Tout les articles de presse',
        'view_item' => 'Voir article de presse',
        'search_items' => 'Chercher un article de presse',
        'not_found' =>  'Aucun article de presse trouvé',
        'not_found_in_trash' => 'Aucun article de presse trouvé dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Presse'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'presse'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-open-folder',
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
    );
    register_post_type('presse', $args);


    // REALISATIONS
    $labels = array(
        'name' => 'Réalisations',
        'singular_name' => 'Réalisation',
        'add_new' => 'Ajouter une réalisation',
        'add_new_item' => 'Ajouter une nouvelle réalisation',
        'edit_item' => 'Editer une réalisation',
        'new_item' => 'Nouvelle réalisation',
        'all_items' => 'Toutes les réalisations',
        'view_item' => 'Voir réalisation',
        'search_items' => 'Chercher une réalisation',
        'not_found' =>  'Aucune réalisations trouvée',
        'not_found_in_trash' => 'Aucune réalisations trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Réalisations'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'realisation'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-image',
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),

    );
    register_post_type('realisation', $args);



    // RECRUTEMENT
    $labels = array(
        'name' => 'Recrutement',
        'singular_name' => 'Recrutement',
        'add_new' => 'Ajouter une offre',
        'add_new_item' => 'Ajouter une nouvelle offre',
        'edit_item' => 'Editer une offre',
        'new_item' => 'Nouvelle offre',
        'all_items' => 'Toutes les offres',
        'view_item' => 'Voir offre',
        'search_items' => 'Chercher une offre',
        'not_found' =>  'Aucune offre trouvée',
        'not_found_in_trash' => 'Aucune offre trouvée dans la corbeille',
        'parent_item_colon' => '',
        'menu_name' => 'Recrutement'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'recrutement'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-image',
        'show_in_rest' => true,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),

    );
    register_post_type('recrutement', $args);
}



add_action('init', 'codex_custom_init');

function create_real_taxonomies()
{
    $labels = array(
        'name'              => _x('Type presse', 'taxonomy general name'),
        'singular_name'     => _x('Type presse', 'taxonomy singular name'),
        'search_items'      => __('Search Type presse'),
        'all_items'         => __('All Type presses'),
        'parent_item'       => __('Parent Type presse'),
        'parent_item_colon' => __('Parent Type presse:'),
        'edit_item'         => __('Edit Type presse'),
        'update_item'       => __('Update Type presse'),
        'add_new_item'      => __('Add New Type presse'),
        'new_item_name'     => __('New Type presse Name'),
        'menu_name'         => __('Type'),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'type-presse'),
    );

    register_taxonomy('presse_categories', array('presse'), $args);


    $labels = array(
        'name'              => _x('Type de réalisation', 'taxonomy general name'),
        'singular_name'     => _x('Type de réalisation', 'taxonomy singular name'),
        'search_items'      => __('Chercher un type de réalisation'),
        'all_items'         => __('Tout les types de réalisations'),
        'parent_item'       => __('Parent de type de réalisation'),
        'parent_item_colon' => __('Parent type de réalisation:'),
        'edit_item'         => __('Editer un type de réalisation'),
        'update_item'       => __('Mettre à jour un type de réalisation'),
        'add_new_item'      => __('Ajouter un nouveau type de réalisation'),
        'new_item_name'     => __('Nouveau nom de type de réalisation'),
        'menu_name'         => __('Type de réalisation'),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'type-real'),
    );

    register_taxonomy('real_categories', array('realisation'), $args);
}
add_action('init', 'create_real_taxonomies', 0);


// ajouter option page //
if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}

//ajouter une nouvelle zone de menu à mon thème
// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu Header'),
            'footer-menu' => __('Menu Footer'),
        )
    );
}
add_action('init', 'register_my_menus');



add_action('save_post', 'dfr_custom_excerpt', 10, 1);
function dfr_custom_excerpt($post_id)
{
    //récupération de l'extrait et du contenu du post
    global $wpdb;
    $sql = "SELECT post_content,post_excerpt FROM " . $wpdb->prefix . "posts WHERE ID = " . $post_id;
    $result = $wpdb->get_row($sql);

    //si un extrait existe
    if ($result->post_excerpt) {
        //on en retire le code et on ne garde que les 150 premiers caractères
        $extrait = substr(wp_strip_all_tags($result->post_excerpt), 0, 50);
        //on met à jour la base de données
        $wpdb->update(
            $wpdb->prefix . "posts",
            array('post_excerpt' => $extrait),
            array('post_id' => $post_id)
        );
    }
    //sinon on utilise le contenu
    else {
        //on supprime les tags HTML et on prend les 150 premiers caractères
        $extrait = substr(wp_strip_all_tags($result->post_content), 0, 50);
        $wpdb->update(
            $wpdb->prefix . "posts",
            array('post_excerpt' => $extrait),
            array('post_id' => $post_id)
        );
    }
}



function wp_trim_all_excerpt($text)
{ // Creates an excerpt if needed; and shortens the manual excerpt as well
    global $post;
    if ('' == $text) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    }
    $text = strip_shortcodes($text); // optional
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 40);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
    return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wp_trim_all_excerpt');
