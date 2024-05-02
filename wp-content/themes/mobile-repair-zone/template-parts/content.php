<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mobile Repair Zone
 */

$mobile_repair_zone_post_page_title =  get_theme_mod( 'mobile_repair_zone_post_page_title', 1 );
$mobile_repair_zone_post_page_thumb = get_theme_mod( 'mobile_repair_zone_post_page_thumb', 1 );
$mobile_repair_zone_post_page_btn = get_theme_mod( 'mobile_repair_zone_post_page_btn', 1 );
?>

<div class="col-lg-6 col-md-6 col-sm-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
        <?php if ($mobile_repair_zone_post_page_thumb == 1 ) {?>
            <?php if ( has_post_thumbnail() ) { ?>
                <?php mobile_repair_zone_post_thumbnail(); ?>
            <?php }?>
        <?php }?>
        <div class="entry-summary p-3 m-0">
            <?php if ($mobile_repair_zone_post_page_title == 1 ) {?>
                <?php the_title('<h3 class="entry-title pb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');?>
            <?php }?>
            <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
            <?php if ($mobile_repair_zone_post_page_btn == 1 ) {?>
                <a href="<?php the_permalink(); ?>" class="btn-text"><?php esc_html_e('Read More','mobile-repair-zone'); ?></a>
            <?php }?>
        </div>
    </article>
</div>