<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * Overrides dine theme's footer.php, to remove pop-up mailchimp form (can't remove in settings without first linking mailchimp account)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Dine
 * @since 1.0
 * @version 1.0
 */

?>

    </div><!-- #content -->

    <footer id="footer" class="site-footer">

        <?php
        get_template_part( 'parts/footer', 'widgets' );
        get_template_part( 'parts/footer', 'bottom' );
        ?>

    </footer><!-- #footer -->

</div><!-- #page -->
<?php wp_footer(); ?>
<?php // Mailchimp pop-up sign-up form removed from here ?>
<?php
  // Call to dine-child-hello-bar plugin. Make sure plugin is installed before calling!
  if ( function_exists('dc_include_hello_bar') ) {
    dc_include_hello_bar();
  }
?>
</body>
</html>
