<?php get_header(); ?>
<?php 
$hotel_galaxy_default_setting=hotel_galaxy_default_setting(); 
$hotel_galaxy_settings = wp_parse_args(get_option( 'hotel_galaxy_option', array() ), $hotel_galaxy_default_setting ); 
?>
<?php 
get_template_part('templates/slider'); 



if($hotel_galaxy_settings['room_sec_position']=='S_top'){
	if($hotel_galaxy_settings['service_show']==1){
		get_template_part('templates/home-widget');
	}	

	if($hotel_galaxy_settings['room_sec_show']==1){
		get_template_part('templates/home-room');
	}	
}else{
	if($hotel_galaxy_settings['room_sec_show']==1){
		get_template_part('templates/home-room');
	}	
	if($hotel_galaxy_settings['service_show']==1){
		get_template_part('templates/home-widget');
	}	
}



if($hotel_galaxy_settings['blog_show']==1){
	get_template_part('templates/home-blogs');
}
if($hotel_galaxy_settings['shortcode_show']==1){
	get_template_part('templates/home-shortcode');
}
?>

<?php get_footer(); ?>