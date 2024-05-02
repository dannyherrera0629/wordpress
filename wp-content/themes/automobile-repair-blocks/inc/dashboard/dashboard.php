<?php

add_action( 'admin_menu', 'automobile_repair_blocks_gettingstarted' );
function automobile_repair_blocks_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'automobile-repair-blocks'), esc_html__('Theme Documentation', 'automobile-repair-blocks'), 'edit_theme_options', 'automobile-repair-blocks-guide-page', 'automobile_repair_blocks_guide');
}

function automobile_repair_blocks_admin_theme_style() {
   wp_enqueue_style('automobile-repair-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'automobile_repair_blocks_admin_theme_style');

if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_SUPPORT' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/automobile-repair-blocks/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_REVIEW' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/automobile-repair-blocks/reviews/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_LIVE_DEMO' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_LIVE_DEMO',__('https://www.ovationthemes.com/demos/automobile-repair-blocks-pro/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_BUY_PRO' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/wordpress/car-repair-wordpress-theme/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_PRO_DOC' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-automobile-repair-blocks-pro-doc/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_FREE_DOC' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_FREE_DOC',__('https://www.ovationthemes.com/docs/ot-automobile-repair-blocks-free-doc/','automobile-repair-blocks'));
}
if ( ! defined( 'AUTOMOBILE_REPAIR_BLOCKS_THEME_NAME' ) ) {
define('AUTOMOBILE_REPAIR_BLOCKS_THEME_NAME',__('Premium Automobile Repair Blocks Theme','automobile-repair-blocks'));
}

/**
 * Theme Info Page
 */
function automobile_repair_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$automobile_repair_blocks_theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $automobile_repair_blocks_theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'automobile-repair-blocks'); ?><?php echo esc_html($automobile_repair_blocks_theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'automobile-repair-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'automobile-repair-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','automobile-repair-blocks'); ?></h3>
					<p><?php $automobile_repair_blocks_theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $automobile_repair_blocks_theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','automobile-repair-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','automobile-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','automobile-repair-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','automobile-repair-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','automobile-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','automobile-repair-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','automobile-repair-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','automobile-repair-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','automobile-repair-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(AUTOMOBILE_REPAIR_BLOCKS_THEME_NAME); ?></h3>
				<img class="automobile_repair_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $automobile_repair_blocks_theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'automobile-repair-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'automobile-repair-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( AUTOMOBILE_REPAIR_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'automobile-repair-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'automobile-repair-blocks');?> </li>                 
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'automobile-repair-blocks');?> </li>
					<li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'automobile-repair-blocks');?> </li>
               <li class="upsell-automobile_repair_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'automobile-repair-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>