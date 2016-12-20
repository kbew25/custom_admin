<?php

/**
 * Implements hook_views_data().
 *
 * Let views know about custom field.
 */
function custom_admin_views_data() {
  $data['custom_admin']['table']['group'] = t('Custom Config');
  $data['custom_admin']['table']['join'] = array(
    // Exist in all views.
    '#global' => array(),
  );

  $data['custom_admin']['custom_site_logo_svg'] = array(
    'title' => t('custom_site_logo_svg'),
    'help' => t('custom_site_logo_svg'),
    'field' => array(
      'handler' => 'views_handler_my_custom_field',
    ),
  );

  return $data;
}
