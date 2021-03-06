<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('slider', 1920, 1200, true );
add_image_size('headingpage', 1200, 294, true );
add_image_size('pagesucursal', 320, 240, true );
add_image_size('highnews', 490, 315, true );
add_image_size('normalnews', 320, 240, true);
add_image_size('modal', 570, 440,true);
//add_image_size('head', 1920, 800, true );
}
/* 
add_filter('image_size_names_choose', 'my_image_sizes');
	function my_image_sizes($sizes) {
	$addsizes = array(
		"col-6" => 'Media columna'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
*/
add_post_type_support('page', 'excerpt');
;?>
<?php 
if(is_single()){
	add_filter( 'show_admin_bar', '__return_false' );
}
?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú Principal');
	register_nav_menu( 'secondary', 'Menú Superior');
//	register_nav_menu( 'third', 'Menú interiores');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('core');
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php

//Post type register

add_action('init', 'documentos_register');
function documentos_register() {
    $args = array(
        'label' => 'Documentos',
        'singular_label' => 'Documento',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'documentos'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail')
    );
    register_post_type('documentos', $args);
    flush_rewrite_rules();
}

add_action('init', 'galeria_register');
function galeria_register() {
    $args = array(
        'label' => 'Galería',
        'singular_label' => 'Galería',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'galeria'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'custom-fields')
    );
    register_post_type('galeria', $args);
    flush_rewrite_rules();
}

add_action('init', 'sucursal_register');
function sucursal_register() {
    $args = array(
        'label' => 'Sucursales',
        'singular_label' => 'Sucursal',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'sucursal'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'custom-fields')
    );
    register_post_type('sucursal', $args);
    flush_rewrite_rules();
}



add_action('init', 'anticipos_register');
function anticipos_register() {
    $args = array(
        'label' => 'Anticipos',
        'singular_label' => 'Anticipo',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'anticipos'),
        'supports' => array('title', 'editor' , 'excerpt' , 'custom-fields')
    );
    register_post_type('anticipos', $args);
    flush_rewrite_rules();
}

?>

<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
		body{ background-color:#3a3a3a;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important;
		background-size: 120px;
		height: 120px;
		margin: 0px auto 0px;
		width: 120px;
	}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
?>
<?php
function validaLetras($texto){
	return preg_replace('/[^a-zA-Z áéíóúÁÉÍÓÚñÑ]/', '', $texto);
}



add_action('wp_ajax_enviaSolicitud', 'enviaSolicitud');
add_action('wp_ajax_nopriv_enviaSolicitud', 'enviaSolicitud');
function enviaSolicitud(){
	
	$nombre = $_GET['nombre'];
	$rut = $_GET['rut'];
	$monto = $_GET['monto'];
	$email = $_GET['email'];
	
	
	$error = 0;
	if(validaLetras($nombre) != $nombre){
		$error = 1;
	}
	
	if (!preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $email)) {
		$error = 1;
	} 
	
	if($error == 0){
		$nuevaSolicitud = array(
		  'post_title'    => $rut,
		  'post_content'  => 'solicitud de anticipo de: '.$nombre,
		  'post_status'   => 'publish',
		  'post_type'	  => 'anticipos',
		  'post_excerpt'  => $monto,
		);
		
		$askId = wp_insert_post( $nuevaSolicitud , $cueck );
		
		if($cueck){
			echo '3';
		}else{
			//var_dump($askId);
			echo '4';
			update_post_meta($askId , 'nombre' , $nombre);
			update_post_meta($askId , 'email' , $email);
			update_post_meta($askId , 'monto' , $monto);
			update_post_meta($askId , 'rut' , $rut);
		}
	}else{
		echo '5';
	}
	die;
}

?>
<?php 
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
 
	// Add file extension 'extension' with mime type 'mime/type'
	$existing_mimes['kml'] = 'application/vnd.google-earth.kml+xml';
	$existing_mimes['kmz'] = 'application/x-kmap';
 
	// and return the new full result
	return $existing_mimes;
 
}
?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#129dd9 !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#2cb3ed !important}
	.wp-core-ui .button-primary{background-color:#2cb3ed !important}
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>
<?php 
//add_filter( 'jpeg_quality', create_function( '', 'return 75;' ) );
?>
<?php add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );?>