<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'create_post_type_fbc' );

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

  require_once( 'functions/walker.php' );
  require_once( 'functions/breadcrumbs.php' );
  require_once( 'functions/post_types.php' ); 
  require_once( 'functions/wp_list_post_types.php' );    
  // MENUS

register_nav_menus( array(

    // TOPO
    'top' => esc_html__( 'Menu do Topo', 'fbc' ),

    // RODAPÉ
    'bottom' => esc_html__( 'Menu do Rodapé', 'fbc' ),            

) );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



// Add Shortcode
function accordion_shortcode( $atts , $content = null ) {

    // Attributes
    $atts = shortcode_atts(
        array(
            'title' => '',
            'content' => '',
        ),
        $atts,
        'accordion'
    );

    // Return accordion HTML code
    return '<li class="item">
                <div class="accordion atual col-md-12" id="open">' . $atts['title'] . '</div>
                <div class="informacoes" style="display: block;">
                 <p>'. $atts['content'] . '</p>
                </div>
            </li>';
               

}
add_shortcode( 'accordion', 'accordion_shortcode' );





add_action( 'wp' , 'check_for_members_only' );

function check_for_members_only() {
    global $post;

    if ( get_post_meta( $post->ID , '_members_only' , true ) && !is_user_logged_in() ) {
        $url = wp_login_url( get_permalink() );
        header( 'Location:'.$url );
        exit();
    }
}


function add_members_only_meta_box() {
    add_meta_box( 'add_members_only_meta' , 'Médicos apenas' , 'add_members_only_meta' , 'page' , 'side' , 'high' );
    // add_meta_box( 'add_members_only_meta' , 'Médicos apenas' , 'add_members_only_meta' , 'post' , 'side' , 'high' );
    // add_meta_box( 'add_members_only_meta' , 'Médicos apenas' , 'add_members_only_meta' , 'aula' , 'side' , 'high' );
}
add_action( 'add_meta_boxes' , 'add_members_only_meta_box' );

function add_members_only_meta() {
    global $post;

    $meta_box_value = get_post_meta( $post->ID , '_members_only' , true ); 

    if ( $meta_box_value == 'true' ) {
        $meta_box_value = 'checked="checked"';
    }

    echo '<input type="hidden" name="members_only_nonce" id="members_only_nonce" value="' . wp_create_nonce( 'members_only' ) . '" />';
    echo '<input type="checkbox" name="members_only" id="members_only" value="true" '.$meta_box_value .' /> Restrito para médicos?';
}

/* When the post is saved, saves our custom data */
function members_only_save_postdata( $post_id )
{
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( !wp_verify_nonce( $_POST['members_only_nonce'], 'members_only' ) )
    {
        return $post_id;
    }

    // verify if this is an auto save routine. If it is our form has not been submitted, so we dont want
    // to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;

    // Save
    update_post_meta( $post_id , '_members_only' , $_POST['members_only'] );

    return $post_id;
}
add_action( 'save_post' , 'members_only_save_postdata' );
/** End of code **/
function cutom_login_logo() {
        echo "<style type=\"text/css\">
                body.login div#login h1 a {
                background-image: url(".get_bloginfo('template_directory')."/images/logo-abrasivo.png);
                -webkit-background-size: auto;
                background-size: auto;
                margin: 0 0 25px;
                width: 320px;
                }
                body.login{
                    background: url(".get_bloginfo('template_directory')."/images/bg-abrasivo.jpg) no-repeat #12a89d center center fixed ;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
                .login #backtoblog a, .login #nav a, .login h1 a, .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover{
                    color:#ffffff;
                }
                #login{
                    text-align:center;
                }
        </style>";
    }
    add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

    function loginpage_custom_link() {
        return 'http://www.abrasivodigital.com.br';
    }
    add_filter('login_headerurl','loginpage_custom_link');



function penguin_content_image_sizes_attr($size) {
 // Singular posts with sidebar
 if ( is_singular() ) {
 return '(max-width: 599px) calc(100vw - 50px), (max-width: 767px) calc(100vw - 70px), (max-width: 991px) 429px, (max-width: 1199px) 597px, 747px';
 }
 // Page full width without sidebar
 if ( get_page_template_slug() === 'index.php' ) {
 return '(max-width: 599px) calc(100vw - 50px), (max-width: 767px) calc(100vw - 70px), (max-width: 991px) 679px, (max-width: 1199px) 839px, 1039px';
 }
 // 2 col blog with sidebar
 else {
 return '(max-width: 599px) calc(100vw - 50px), (max-width: 767px) calc(100vw - 70px), (max-width: 991px) 429px, (max-width: 1199px) 637px, 354px';
 }
}
add_filter('wp_calculate_image_sizes', 'penguin_content_image_sizes_attr', 10 , 2);

?>