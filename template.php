<?php

drupal_add_js('https://kit.fontawesome.com/4a20555d6f.js', 'external');

drupal_add_js('/sites/all/themes/subtle/js/ui.js', array(
    'type' => 'file',
    'scope' => 'footer',
    'every_page' => TRUE
));

function subtle_preprocess_html(&$variables) {
    drupal_add_css('https://fonts.googleapis.com/css2?family=Playfair+Display:400&display=block', array(
        'type' => 'external'
    ));
}
