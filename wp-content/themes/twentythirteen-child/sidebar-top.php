<?php
/**
 * The sidebar containing the top widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 */

if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="topsidebar" class="sidebar-container" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	</div><!-- #secondary -->
<?php endif; ?>
