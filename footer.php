<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bisi\'s_Wordpress_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class=" footer-content fukol-grid">
      <div class = "social-media">  
        <a class="fa fa-facebook" href="https://www.facebook.com/bisialimi/?ref=br_rs" title="facebook" target="_blank"></a>
        <a class="fa fa-twitter" href="https://twitter.com/bisialimi" title="twitter" target="_blank"></a>
        <a class="fa fa-linkedin" href="https://www.linkedin.com/in/adebisi-ademola-a" title="linkedin" target="_blank"></a>
        <a class="fa fa-youtube" href="https://www.youtube.com/user/bisialimi" title="youtube" target="_blank"></a>
        <a class="fa fa-instagram" href="https://www.instagram.com/bisialimi/?hl=en" title="instagram" target="_blank"></a>
      </div>
    </div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bisis-wordpress-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bisis-wordpress-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bisis-wordpress-theme' ), 'bisis-wordpress-theme', '<a href="http://www.ggalliani.com" rel="designer">Giancarlo Galliani</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
