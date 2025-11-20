<?php 

// print .svg file from assets/img folder
function svg($path_or_id, $classes = '') {
	$svg_code = '';
	if (!str_contains($path_or_id, '.svg')) {
		$path_or_id .= '.svg';
	}
	$file_path = get_template_directory(). '/assets/img/' . $path_or_id;
	$svg_code = file_get_contents($file_path);
	if (file_exists($file_path)) { 
		if (!empty($classes)) {
			$svg_code = str_replace('<svg ', sprintf('<svg class="%s" ', $classes), $svg_code);
		}
		return $svg_code;
	}
}

// get img data array by image id
function img_data($id, $size = 'full') {
	$src = wp_get_attachment_image_src($id, $size);
	return [
		'src' => $src[0],
		'alt' => get_post_meta($id, '_wp_attachment_image_alt', true),
		'width' => $src[1],
		'height' => $src[2],
	];
}

// print img by id
function attach($id = null, $class = '', $size = 'full', $lazyload = true) {
	if(!$id) {return;}
	$image = img_data($id, $size);

	$lazyload = $lazyload ? ' loading="lazy"' : null;
	return "<img class='{$class}' src='{$image['src']}' alt='{$image['alt']}' {$lazyload} >";
}

// get feature image from post id
function featureImg($postId, $class = '', $size = 'full') {
  $thumb_id = get_post_thumbnail_id($postId);
  if($thumb_id) {
    return attach($thumb_id, $class);
  }
}

