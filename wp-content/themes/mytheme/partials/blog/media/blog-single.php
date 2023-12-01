<?php
/**
 * Blog single post standard format media
 *
 * @package		Total
 * @subpackage	Partials/Blog/Media
 * @author		Alexander Clarke
 * @copyright	Copyright (c) 2014, Symple Workz LLC
 * @link		http://www.wpexplorer.com
 * @since		Total 1.6.0
 * @version		1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if there isn't any thumbnail
if ( ! has_post_thumbnail() ) {
	return;
}
// Get cropped featured image
$wpex_image = wpex_image( 'array' ); ?>
<h1 class="single-post-title custome-single-post"><?php the_title(); ?></h1>

<div class="cate-post"><?php
$cats = array();
foreach (get_the_category($post_id) as $c) {
$cat = get_category($c);
array_push($cats, $cat->name);
}

if (sizeOf($cats) > 0) {
$post_categories = implode(', ', $cats);
} else {
$post_categories = 'Not Assigned';
}

echo $post_categories; ?>
</div>
<div id="post-media" class="clr">

<div class="primary-images"> 	<?php
	// Image with lightbox link
	if ( get_theme_mod( 'blog_post_image_lightbox' ) ) : ?>
		<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" class="wpex-lightbox <?php wpex_img_animation_classes(); ?>" data-type="image"><img src="<?php echo $wpex_image['url']; ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" width="<?php echo $wpex_image['width']; ?>" height="<?php echo $wpex_image['height']; ?>" /></a>
	<?php
	// No lightbox
	else : ?> 
		<img src="<?php echo $wpex_image['url']; ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" width="<?php echo $wpex_image['width']; ?>" height="<?php echo $wpex_image['height']; ?>" />
	<?php endif; ?>
	<?php
	// Blog entry caption
	if ( get_theme_mod( 'blog_thumbnail_caption' ) && $caption = wpex_featured_image_caption() ) : ?>
		<div class="post-media-caption clr">
			<?php echo $caption; ?>
		</div>
	<?php endif; ?> </div>
    
    
    	
<div class="secondry-images jkk">    <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
endif;

 ?> <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image');

endif;

 ?>  <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fourth-image');

endif;

 ?> 
 
 <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-image');

endif;

 ?>

 <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'sixth-image');

endif;

 ?>
 
  <?php 

if (class_exists('MultiPostThumbnails')) : 

MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'seventh-image');

endif;

 ?> 
 
 </div>
    
    
    
</div><!-- #post-media -->