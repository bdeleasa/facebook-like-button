<?php
/**
 * @file shortcode-fb-like-button.php
 *
 * HTML output for the [fb-like-button] shortcode.
 *
 * Available variables
 * - $href
 * - $layout
 * - $action
 * - $show_faces
 * - $share
 */
?>

<div class="fb-like" data-href="<?php echo $url; ?>" data-layout="<?php echo $layout; ?>" data-action="<?php echo $action; ?>" data-show-faces="<?php echo $show_faces; ?>" data-share="<?php echo $share; ?>" style="<?php echo $style; ?>"></div>