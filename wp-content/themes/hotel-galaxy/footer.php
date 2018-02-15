<?php 
$hotel_galaxy_default_setting=hotel_galaxy_default_setting(); 
$hotel_galaxy_settings = wp_parse_args(get_option( 'hotel_galaxy_option', array() ), $hotel_galaxy_default_setting ); 
?>
<!-------Footer-------------------------------->
<div class="footer-top animate" data-anim-type="zoomIn" data-anim-delay="800">
	<div class="container">
		<div class="row">
			<?php for($i=1; $i<=4; $i++){
				?>
				<div class="col-md-3 col-sm-6 col-xs-3">				
					<div class="f_top_inner noneborder_<?php echo esc_attr($i)?>">											
						<a class="hidden-xs" target="<?php echo $open_tab; ?>" <?php echo ($hotel_galaxy_settings['footer_collout_link_'.$i]!='')? 'href="'.esc_url($hotel_galaxy_settings['footer_collout_link_'.$i]).'"':'' ?>><h4><?php echo esc_attr($hotel_galaxy_settings['footer_collout_title_'.$i]); ?></h4></a>
						<span class="icon"><i class="<?php echo esc_attr($hotel_galaxy_settings['footer_collout_icon_'.$i]); ?>"></i></span> 
					</div>
				</div>
				<?php
			} ?>		
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!--------Footer Section---------------->
<section class="footer animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="800">
	<div class="footer-inner">
		<div class="container">
			<div class="row">
				
				<?php if(is_active_sidebar( 'footer-widget-area' )){
					dynamic_sidebar( 'footer-widget-area' );
				}else{
					$args = array('name' => __( 'Footer Widget Area', 'hotel-galaxy' ),
						'id' => 'footer-widget-area',
						'title'=>__('Text','hotel-galaxy'),
						'description' => __( 'footer widget area', 'hotel-galaxy' ),
						'before_widget' => '<div class="col-md-3"><div class="footer-widget">',
						'after_widget' => '</div></div>',
						'before_title' => '<h4>',
						'after_title' => '</h4>',);
					
					the_widget('WP_Widget_Tag_Cloud', null, $args);
					the_widget('WP_Widget_Categories', null, $args);
					the_widget('WP_Widget_Recent_Comments', null, $args);					
					the_widget('WP_Widget_Recent_Posts', null, $args);
				} ?>
				
			</div>
 <!------/Footer Social--------->
  </div>
 </div>
 <!-----CopyRight------>
 <div class="copyright animate fadeInUp">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<p> <?php echo esc_attr($hotel_galaxy_settings['hotel_galaxy_copyright']); ?> <a target="<?php echo esc_attr('_blank'); ?>" href="<?php echo esc_url($hotel_galaxy_settings['developed_by_link']); ?>"><?php echo esc_attr($hotel_galaxy_settings['developed_by']); ?></a> <?php echo esc_attr($hotel_galaxy_settings['hotel_galaxy_developed_by_text']); ?></p>
 			</div>
 		</div>
 	</div>
 </div>
</section>	
<!-------Footer-------------------------------->
<!--Scroll To Top--> 
<a href="#" class="scroll-top"><i class="fa fa-arrow-up"></i></a>
<!--/Scroll To Top--> 	

</div>
<?php wp_footer(); ?>
</body>
</html>