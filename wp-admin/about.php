<?php
/**
 * About This Version administration panel.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

$title = __( 'About' );

list( $display_version ) = explode( '-', $wp_version );

include( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap">

<h1><?php printf( __( 'Welcome to WordPress&nbsp;%s' ), $display_version ); ?></h1>

<div class="about-text"><?php printf( __( 'Thank you for updating! WordPress %s has lots of refinements we think you&#8217;ll love.' ), $display_version ); ?></div>

<div class="wp-badge"><?php printf( __( 'Version %s' ), $display_version ); ?></div>

<h2 class="nav-tab-wrapper">
	<a href="about.php" class="nav-tab nav-tab-active">
		<?php _e( 'What&#8217;s New' ); ?>
	</a><a href="credits.php" class="nav-tab">
		<?php _e( 'Credits' ); ?>
	</a><a href="freedoms.php" class="nav-tab">
		<?php _e( 'Freedoms' ); ?>
	</a>
</h2>

<div class="changelog">
	<div class="about-overview">
		<img class="about-overview-img" src="//wordpress.org/images/core/3.9/overview.png?0" />
	</div>
	<h2 class="about-headline-callout"><?php _e( 'A smoother media editing&nbsp;experience' ); ?></h2>
	<div class="feature-section col three-col">
		<div class="col-1">
			<img src="//wordpress.org/images/core/3.9/editor.jpg?0" />
			<h4><?php _e( 'Improved visual editing' ); ?></h4>
			<p><?php _e( 'The updated visual editor has improved speed, accessibility, and mobile support.' );
				echo ' ' . __( 'You can paste into the visual editor from your word processor without wasting time to clean up messy styling. (Yeah, we&#8217;re talking about you, Microsoft Word.)' ); ?></p>
		</div>
		<div class="col-2">
			<img src="//wordpress.org/images/core/3.9/image.jpg?0" />
			<h4><?php _e( 'Edit images easily' ); ?></h4>
			<p><?php _e( 'With quicker access to crop and rotation tools, it&#8217;s now much easier to edit your images while editing posts. You can also scale images directly in the editor to find just the right fit.' ); ?></p>
		</div>
		<div class="col-3 last-feature">
			<img src="//wordpress.org/images/core/3.9/drop.jpg?0" />
			<h4><?php _e( 'Drag and drop your images' ); ?></h4>
			<p><?php _e( 'Uploading your images is easier than ever. Just grab them from your desktop and drop them onto the editor.' ); ?></p>
		</div>
	</div>

	<hr>

	<div class="feature-section col two-col">
		<div class="col-1">
			<img src="//wordpress.org/images/core/3.9/gallery.jpg?0" />
			<h4><?php _e( 'Gallery previews' ); ?></h4>
			<p><?php _e( 'Galleries display a beautiful grid of images right in the editor, just like they do in your published post.' ); ?></p>
		</div>
		<div class="col-2 last-feature">
			<img src="//wordpress.org/images/core/3.9/gallery.jpg?0" />
			<h4><?php _e( 'Do more with audio and video' ); ?></h4>
			<p><?php _e( 'Images have galleries; now we&#8217;ve added simple audio and video playlists, so you can showcase your music and clips.' ); ?></p>
		</div>
	</div>
</div>

<hr>

<div class="changelog customize">
	<div class="feature-section col two-col">
		<div>
			<img src="//wordpress.org/images/core/3.9/theme.jpg?0" />
			<h4><?php _e( 'Live widget and header previews' ); ?></h4>
			<p><?php _e( 'Add, edit, and rearrange your site&#8217;s widgets right in the theme customizer. No &#8220;save and surprise&#8221; &mdash; preview your changes live and only save them when you&#8217;re ready.' ); ?></p>
			<p><?php _e( 'The improved header image tool also lets you upload, crop, and manage headers while customizing your theme.' ); ?></p>
		</div>
		<div class="last-feature">
			<img src="//wordpress.org/images/core/3.9/theme.jpg?0" />
			<h4><?php _e( 'Stunning new theme browser' ); ?></h4>
			<p><?php _e( 'Looking for a new theme should be easy and fun. Lose yourself in the boundless supply of free WordPress.org themes with the beautiful new theme browser.' ); ?></p>
		<?php if ( current_user_can( 'install_themes' ) ) { ?>
			<p><a href="<?php echo network_admin_url( 'theme-install.php' ); ?>" class="button button-large button-primary"><?php _e( 'Browse Themes' ); ?></a></p>
		<?php } ?>
		</div>
	</div>
</div>

<hr>

<div class="changelog under-the-hood">
	<h3><?php _e( 'Under the Hood' ); ?></h3>

	<div class="feature-section col three-col">
		<div>
			<h4><?php _e( 'Semantic Captions and Galleries' ); ?></h4>
			<p><?php _e( 'Theme developers have new options for images and galleries that use intelligent HTML5 markup.' ); ?></p>

			<h4><?php _e( 'Inline Code Documentation' ); ?></h4>
			<p><?php _e( 'Every action and filter hook in WordPress is now documented, along with expanded documentation for the media manager and customizer APIs.' ); ?></p>
		</div>
		<div>
			<h4><?php _e( 'External Libraries' ); ?></h4>
			<p><?php _e( 'Updated libraries: TinyMCE&nbsp;4, jQuery&nbsp;1.11, Backbone&nbsp;1.1, Underscore&nbsp;1.6, Plupload&nbsp;2, MediaElement&nbsp;2.14, Masonry&nbsp;3.' ); ?></p>

			<h4><?php _e( 'Improved Database Layer' ); ?></h4>
			<p><?php _e( 'Database connections are now more fault-resistant and have improved compatibility with PHP 5.5 and MySQL 5.6.' ); ?></p>
		</div>
		<div class="last-feature">
			<h4><?php _e( 'New Utility Functions' ); ?></h4>
			<p><?php _e( 'Identify a hook in progress with <code>doing_action()</code> and <code>doing_filter()</code>, and manipulate custom image sizes with <code>has_image_size()</code> and <code>remove_image_size()</code>.' ); ?></p>
			<p><?php _e( 'Plugins and themes registering custom image sizes can now register suggested cropping points. For example, prevent heads from being cropped out of photos with a top-center crop.' ); ?></p>
		</div>
</div>

<hr>

<div class="return-to-dashboard">
	<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
	<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>"><?php
		is_multisite() ? _e( 'Return to Updates' ) : _e( 'Return to Dashboard &rarr; Updates' );
	?></a> |
	<?php endif; ?>
	<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php
		is_blog_admin() ? _e( 'Go to Dashboard &rarr; Home' ) : _e( 'Go to Dashboard' ); ?></a>
</div>

</div>
<?php

include( ABSPATH . 'wp-admin/admin-footer.php' );

// These are strings we may use to describe maintenance/security releases, where we aim for no new strings.
return;

_n_noop( 'Maintenance Release', 'Maintenance Releases' );
_n_noop( 'Security Release', 'Security Releases' );
_n_noop( 'Maintenance and Security Release', 'Maintenance and Security Releases' );

/* translators: 1: WordPress version number. */
_n_noop( '<strong>Version %1$s</strong> addressed a security issue.',
         '<strong>Version %1$s</strong> addressed some security issues.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. */
_n_noop( '<strong>Version %1$s</strong> addressed %2$s bug.',
         '<strong>Version %1$s</strong> addressed %2$s bugs.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. Singular security issue. */
_n_noop( '<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bug.',
         '<strong>Version %1$s</strong> addressed a security issue and fixed %2$s bugs.' );

/* translators: 1: WordPress version number, 2: plural number of bugs. More than one security issue. */
_n_noop( '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bug.',
         '<strong>Version %1$s</strong> addressed some security issues and fixed %2$s bugs.' );

__( 'For more information, see <a href="%s">the release notes</a>.' );
