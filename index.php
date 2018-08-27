<?php

get_header();

?>
<div id="wpwrap">
	<div id="adminmenumain" role="navigation" aria-label="Main menu">
		<a href="#wpbody-content" class="screen-reader-shortcut">Skip to main content</a>
		<a href="#wp-toolbar" class="screen-reader-shortcut">Skip to toolbar</a>
		<div id="adminmenuback"></div>
		<div id="adminmenuwrap">
			<ul id="adminmenu">
				<?php
					if ( has_nav_menu( 'sidebar' ) ) {
						wp_nav_menu( [
							'menu' => 'sidebar',
							'container' => '',
							'items_wrap' => '%3$s',
							'link_before' => '<div class="wp-menu-arrow"><div></div></div><div class="wp-menu-image dashicons-before dashicons-admin-site"><br></div><div class="wp-menu-name">',
							'link_after' => '</div>'
						] );
					}
				?>
			</ul>
		</div>
	</div>
	<div id="wpcontent">
		<div id="wpbody" role="main">
			<div id="wpbody-content" aria-label="Main content" tabindex="0">
				<div class="nvda-temp-fix screen-reader-text">&nbsp;</div>
				<div class="gutenberg">
					<div id="editor" class="gutenberg__editor"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

get_footer();
