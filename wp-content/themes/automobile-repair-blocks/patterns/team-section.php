<?php
/**
 * Title: Team Section
 * Slug: automobile-repair-blocks/team-section
 * Categories: automobile-repair-blocks, team-section
 */
?>

<!-- wp:group {"className":"team-sec","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group team-sec"><!-- wp:spacer {"height":"74px","className":"team-spacer"} -->
<div style="height:74px" aria-hidden="true" class="wp-block-spacer team-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","className":"team-wrapper"} -->
<div class="wp-block-columns are-vertically-aligned-center team-wrapper"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"team-content"} -->
<div class="wp-block-column is-vertically-aligned-center team-content" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"shot-heading","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group shot-heading"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('Team Members','automobile-repair-blocks'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"35px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"heading","fontFamily":"saira"} -->
<h2 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-saira-font-family" style="margin-top:var(--wp--preset--spacing--20);font-size:35px;font-style:normal;font-weight:700"><?php esc_html_e('Expert Team','automobile-repair-blocks'); ?><span class="color"><?php esc_html_e(' Members','automobile-repair-blocks'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"team-excerpt","fontSize":"extra-small"} -->
<p class="team-excerpt has-extra-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","className":"team-right"} -->
<div class="wp-block-column is-vertically-aligned-center team-right" style="flex-basis:60%"><!-- wp:columns {"className":"team-img-wrapper"} -->
<div class="wp-block-columns team-img-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"team-img-outer-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-outer-1"><!-- wp:image {"id":2094,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/team1.png'); ?>" alt="" class="wp-image-2094"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"team-img-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","className":"team-social","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-social has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:social-links {"iconColor":"heading","iconColorValue":"#FFFFFF","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"team-img-text team-text-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-text team-text-1 has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"base","fontFamily":"saira"} -->
<p class="has-base-color has-text-color has-link-color has-saira-font-family" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Jane Cooper','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"1px"}}},"textColor":"base","fontSize":"extra-small"} -->
<p class="has-base-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:1px;font-style:normal;font-weight:500;line-height:1"><?php esc_html_e('SR. Manager','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"team-img-outer-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-outer-2"><!-- wp:image {"id":2093,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/team2.png'); ?>" alt="" class="wp-image-2093"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"team-img-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","className":"team-social","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-social has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"team-img-text team-text-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-text team-text-2 has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"base","fontFamily":"saira"} -->
<p class="has-base-color has-text-color has-link-color has-saira-font-family" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Jane Cooper','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"1px"}}},"textColor":"base","fontSize":"extra-small"} -->
<p class="has-base-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:1px;font-style:normal;font-weight:500;line-height:1"><?php esc_html_e('SR. Manager','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"team-img-outer-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-outer-3"><!-- wp:image {"id":2092,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/team3.png'); ?>" alt="" class="wp-image-2092"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"team-img-inner","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-inner" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base","className":"team-social","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-social has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"team-img-text team-text-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group team-img-text team-text-3 has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"base","fontFamily":"saira"} -->
<p class="has-base-color has-text-color has-link-color has-saira-font-family" style="font-style:normal;font-weight:600;text-transform:uppercase"><?php esc_html_e('Jane Cooper','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"1px"}}},"textColor":"base","fontSize":"extra-small"} -->
<p class="has-base-color has-text-color has-link-color has-extra-small-font-size" style="margin-top:1px;font-style:normal;font-weight:500;line-height:1"><?php esc_html_e('SR. Manager','automobile-repair-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->