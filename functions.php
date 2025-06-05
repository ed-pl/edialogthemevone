<?php
function bootstrap_wp_theme_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
	
    // Enqueue Icons Bootstrap
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');


    

    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue Bootstrap JS and dependencies
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'bootstrap_wp_theme_enqueue_styles');

 
// ** Add SVG Mime Types **//
 function theme_name_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;  
 }

add_filter('upload_mimes', 'theme_name_mime_types');
add_filter('mime_types',  'theme_name_mime_types');


//** Essential theme supports **//
function my_theme_setup(){

//* Custom Logo *//
add_theme_support( 'custom-logo', array(
'height'               => 100,
'width'                => 200,
'flex-height'          => true,
'flex-width'           => true,
'header-text'          => array( 'site-title', 'site-description' ),
'unlink-homepage-logo' => true,
) );

add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'my_theme_setup');

add_filter('excerpt_length', function() { return 90; });

//** end Essential theme supports **//

//**add function into the_excerpt() add html li tags **//

function custom_wp_trim_words($text, $num_words = 55, $more = null) {
    if (null === $more) {
        $more = __('&hellip;');
    }
    $original_text = $text;
    $text = wp_strip_all_tags($text, true);
    $words_array = preg_split('/[\\n\\r\\t ]+/', $text, $num_words + 1, PREG_SPLIT_NO_EMPTY);

    if (count($words_array) > $num_words) {
        array_pop($words_array);
        $text = implode(' ', $words_array);
        $text = $text . $more;
    } else {
        $text = implode(' ', $words_array);
    }

    $allowed_tags = array(
        'a' => array('href' => array(), 'title' => array()),
        'em' => array(),
        'strong' => array(),
        'li' => array(),
        // Weitere Tags hinzufügen, die erlaubt sein sollen
    );
    return wp_kses($text, $allowed_tags);
}

function custom_get_the_excerpt($post = null) {
    $post = get_post($post);
    $excerpt = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
    $excerpt = custom_wp_trim_words($excerpt, 85, '...');
    return apply_filters('the_excerpt', $excerpt);
}

//**add_post_rank_number **//

function add_post_rank_number($query) {
    if ($query->is_main_query() && $query->is_home()) {
        $rank = 1;
        while ($query->have_posts()) {
            $query->the_post();
            update_post_meta(get_the_ID(), 'post_rank', $rank);
            $rank++;
        }
        wp_reset_postdata();
    }
}
add_action('pre_get_posts', 'add_post_rank_number');



/**
 * Register Navigation
 */

require_once('class-wp-bootstrap-navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Register Custom Navigation Walker
 */

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );









