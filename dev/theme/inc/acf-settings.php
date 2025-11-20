<?php 

// Store local ACF JSON 
if (function_exists('acf_get_setting')) {
	function acf_json_save_point( $path ) {
	  return ABSPATH . 'dev/theme/inc/acf-json';
	}
	add_filter( 'acf/settings/save_json', 'acf_json_save_point' );
}


// Aggiungi una pagina di opzioni
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Opzioni del Tema',
        'menu_title'    => 'Opzioni Tema',
        'menu_slug'     => 'opzioni-tema',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}