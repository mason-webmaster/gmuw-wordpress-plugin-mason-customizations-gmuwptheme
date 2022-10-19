<?php

/**
 * Enqueue custom admin CSS
 */
add_action('admin_enqueue_scripts', function(){

  // Enqueue admin styles. Enqueue additional css files here as needed.

  // Enqueue datatables stylesheet
  wp_enqueue_style (
    'gmuw_gmuwptheme_admin_datatables_css', //stylesheet name
    plugin_dir_url( __DIR__ ).'datatables/datatables.min.css' //path to stylesheet
  );

  // Enqueue the custom admin stylesheets
  wp_enqueue_style(
    'gmuw_gmuwptheme_admin_custom_css', //stylesheet name
    plugin_dir_url( __DIR__ ).'css/custom-gmuwptheme-admin.css' //path to stylesheet
  );

});
