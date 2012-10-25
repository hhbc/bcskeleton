<?php
/**
 * @file
 * Display Suite KRT 2 Col Imageflow template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $top: Rendered content for the "Top" region.
 * - $top_classes: String of classes that can be used to style the "Top" region.
 *
 * - $left_image: Rendered content for the "Left image" region.
 * - $left_image_classes: String of classes that can be used to style the "Left image" region.
 *
 * - $right_content: Rendered content for the "Right content" region.
 * - $right_content_classes: String of classes that can be used to style the "Right content" region.
 *
 * - $bottom: Rendered content for the "Bottom" region.
 * - $bottom_classes: String of classes that can be used to style the "Bottom" region.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">

  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

    <<?php print $top_wrapper; ?> class="ds-top<?php print $top_classes; ?>">
      <?php print $top; ?>
    </<?php print $top_wrapper; ?>>

    <<?php print $left_image_wrapper; ?> class="ds-left-image<?php print $left_image_classes; ?>">
      <?php print $left_image; ?>
    </<?php print $left_image_wrapper; ?>>

    <<?php print $right_content_wrapper; ?> class="ds-right-content<?php print $right_content_classes; ?>">
      <?php print $right_content; ?>
    </<?php print $right_content_wrapper; ?>>

    <<?php print $bottom_wrapper; ?> class="ds-bottom<?php print $bottom_classes; ?>">
      <?php print $bottom; ?>
    </<?php print $bottom_wrapper; ?>>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
