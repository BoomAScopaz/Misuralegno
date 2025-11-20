<?php
function tinymce_settings($init_array)
{
  // Define the style_formats array
  $style_formats = array(

    array(
      'title' => 'Dimensione testo',
      'items' => array(
        // Each array child is a format with it's own settings
        array(
          'title' => 'title',
          'selector' => 'p,h1,h2,h3,h4,h5,h6,ul,ol,li',
          'classes' => 'class'
        ),
      )
    ),

    array(
      'title' => 'Colore testo',
      'items' => array(
        // Each array child is a format with it's own settings
        array(
          'title' => 'primary',
          'selector' => 'p,h1,h2,h3,h4,h5,h6',
          'classes' => '!text-primary'
        ),
      )
    ),

    array(
      'title' => 'Font',
      'items' => array(
        // Each array child is a format with it's own settings
        array(
          'title' => 'fontname',
          'selector' => 'p,h1,h2,h3,h4,h5,h6',
          'classes' => '!font-fontname'
        ),
      )
    ),

  );
  // Insert the array, JSON ENCODED, into 'style_formats'
  $init_array['style_formats_merge'] = true;
  $init_array['style_formats'] = json_encode($style_formats);
  $init_array['toolbar2'] = 'styleselect,' . $init_array['toolbar2'];
  return $init_array;
}
add_filter('tiny_mce_before_init', 'tinymce_settings');

function mce_buttons_2($buttons) {
  array_unshift($buttons, 'styleselect');
  return $buttons;
}
add_filter('mce_buttons_2', 'mce_buttons_2');
