<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>

<?php 
// For description of variables go to: http://www.codefleet.net/cyclone-slider-2/#template-variables
?>


<?php foreach($slides as $slide): ?>
	<?php
	$url =	cyclone_slide_image_url($slide['id'], $slider_settings['width'], $slider_settings['height'], array('current_slide_settings'=>$slide, 'slideshow_settings'=>$slider_settings) );
	$image_meta = getimagesize($url);
	$width = $image_meta[0];
	$height = $image_meta[1];
	?>
	
	<div class="row post section placeholder-container media">	
		<span class="placeholder blur darken" style="background-image:url(<?php echo $url; ?>)"></span>
		
	<?php if(empty($slide['title'])) : ?>		
		<div class="img large-12 columns hide-for-small">
			<img src="<?php echo $url; ?>" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
		</div>			
	<?php else : ?>
		<div class="img large-6 columns hide-for-small">
			<img src="<?php echo $url; ?>" alt="<?php echo $slide['img_alt'];?>" title="<?php echo $slide['img_title'];?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
		</div>
		
		<div class="bd large-6 columns">
			<div class="centerTitle">
				<div class="centered">
					<h1 itemprop="name headline" class="entry-title"><?php echo wp_kses_post( $slide['title'] );?></h1>
				</div>
			</div>
		</div>
	<?php endif; ?>
	</div>
<?php endforeach; ?>
