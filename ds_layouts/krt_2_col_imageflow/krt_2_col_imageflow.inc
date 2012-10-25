<?php

/**
 * @file
 * Display Suite layout configuration for KRT 2 col imageflow.
 */

function ds_krt_2_col_imageflow() {
  return array(
    'label' => t('KRT 2 column imageflow'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (krt_2_col_imageflow.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (krt_2_col_imageflow.png)
    'image' => TRUE,
  );
}
