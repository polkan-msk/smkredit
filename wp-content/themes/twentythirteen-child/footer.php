<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>


			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
		        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu nav-menu-bottom', 'depth'=>1 ) ); ?>
                <div id="copyright">&copy;Смартмани. <?=date('Y')?>. Все права защищены.</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
