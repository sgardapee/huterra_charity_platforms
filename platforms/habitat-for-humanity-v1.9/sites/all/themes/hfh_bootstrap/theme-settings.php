<?php // $Id$
 
function hfh_bootstrap_form_system_theme_settings_alter(&$form, $form_state) {
  $form['hfh_bootstrap_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme Carousel Settings')
   );
  $form['hfh_bootstrap_settings']['carousel_timing'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Carousel Time Interval (in milliseconds)'),
    '#default_value' => theme_get_setting('carousel_timing'),
    '#description'   => t("Set the time interval for carousel image rotation"),
  );

     // add a setting for backgroud color

  $form['hfh_bootstrap_background'] = array(
    '#type'        => 'fieldset',
    '#title'       => t('Background Settings'),
    '#collapsible' => TRUE,
    '#collapsed'   => FALSE
   );
    //Background Elements
     $form['hfh_bootstrap_background']['background_color'] = array(
    '#type'          => 'select',
    '#title'         => t('Background Colors'),
    '#default_value' => theme_get_setting('background_color'),
    '#description'   => t("Choose your site's background color"),
    '#options'       => array(
       0 => t('Blue'),
       1 => t('White'),
       2 => t('Light Blue'),
       3 => t('Blueprint')
       )
    );
}

