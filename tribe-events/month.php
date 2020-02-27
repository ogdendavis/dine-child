<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * This template overrides the plugin default month view located at:
 * plugins/the-events-calendar/src/views/month.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Events page has id 936
$page_id = 936;

// Modified from dine theme index.php -- get the header for the Events page
?>
<?php if ( has_post_thumbnail( $page_id ) ) {
    $tb = get_the_post_thumbnail_url( $page_id, 'full' );
    $bg = ' style="background-image:url(' . esc_url( $tb ) .')"';
    $header_class = 'dine-parallax';
} else {
    $tb = $header_img;
    $header_class = '';
} ?>

<header id="page-header"<?php echo $bg;?> class="<?php echo esc_attr( $header_class ); ?> page-header--breakout">

    <div class="container">

        <div class="dine-parallax-element">

            <h1 id="page-title"><?php echo get_the_title($page_id); ?></h1>

        </div>

        <?php $subtitle = trim( get_post_meta( $page_id, '_dine_subtitle', true ) ); if ( $subtitle ) : ?>

        <div class="dine-parallax-element">

            <h2 id="page-subtitle"><?php echo wp_kses( $subtitle, dine_allowed_html() ); ?></h2>

        </div>

        <?php endif; ?>

        <div class="dine-parallax-element">

            <div class="dine-divider type-icon divider-icon has-animation" data-delay="200">

                <div class="divider-inner">

                    <div class="divider-line line-left"></div>

                            <div class="icon-wrapper">

                        <span class="icon"><i class="fa fa-star"></i></span>
                    </div><!-- .icon-wrapper -->

                    <div class="divider-line line-right"></div>

                </div><!-- .divider-inner -->

            </div>

        </div>

    </div>

    <div class="row-overlay"></div>

</header><!-- #page-header -->

<?php
$events_content = apply_filters( 'the_content', get_post($page_id)->post_content );
?>
<div class="entry-content events-content-container">
  <?php echo $events_content; ?>
</div>



<?php
// This is from the original Tribe template, referenced in top comment of this file
do_action( 'tribe_events_before_template' );

// Title Bar
tribe_get_template_part( 'month/title-bar' );

// Tribe Bar
tribe_get_template_part( 'modules/bar' );

// Main Events Content
tribe_get_template_part( 'month/content' );

do_action( 'tribe_events_after_template' );
