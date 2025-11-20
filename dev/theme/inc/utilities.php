<?php 

// print formatted array
function pre($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}


// get template from components path
function component($path, $arr = null) {
	get_template_part( "components/{$path}", null, $arr );
}


// create butotn form acf link field
function button($arr = null, $class = '', $icon = null) {
	if( !empty($arr) ){
		$arr['class'] = $class;
		$arr['icon'] = $icon;
		get_template_part( "components/button", null, $arr );
	}
}


// video componet
function video($url = null, $class = '') {
	if($url){
		get_template_part( "components/video", null, [
			'url' => $url,
			'class' => $class,
		] );
	}
}


// print cf7 form by object
function form_cf7($form_obj) {
  $shortcode = '[contact-form-7 id="'.$form_obj->ID.'" title="'.$form_obj->post_title .'"]';
  return do_shortcode($shortcode);
}


// make acf fields global for posts
$field = null;
if(function_exists('get_fields')) {
	function get_acf_fields_for_all_post_types() {

	    global $post;
	    if ( isset($post->ID) ) {

	        $acf_fields = get_fields($post->ID);

	        if( $acf_fields ) {
	            global $fields;
	            $fields = $acf_fields;
	        }
	    }
	}
	add_action('wp', 'get_acf_fields_for_all_post_types');
}



// create layout component
function createLayoutComponent($name) {
    if(file_exists(ABSPATH."dev/env.json")) {

        // sanitizzazione del nome
        $name = preg_replace('/[^a-z0-9_-]/i', '', $name);

        $component = ABSPATH."dev/theme/components/{$name}.php";
        $css       = ABSPATH."dev/theme/assets/scss/components/_{$name}.scss";
        $cssMain   = ABSPATH."dev/theme/assets/scss/main.scss";

        // evita sovrascrittura
        if(file_exists($component) || file_exists($css)) {
            return false;
        }

        $content = '<section class="'.$name.'"></section><?php pre($args) ?>';

        file_put_contents($component, $content);
        file_put_contents($css, ".{$name}{}");
        file_put_contents($cssMain, "\n@import 'components/{$name}';", FILE_APPEND);

        return true;
    }
    return false;
}






