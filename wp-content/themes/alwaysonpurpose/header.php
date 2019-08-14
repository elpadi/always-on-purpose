<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

		?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<!--Wrapper-->
<div id="wrapper">

	<!--Content Wrapper-->
    <div id="content-wrapper">
    
    	<!--Header-->
        <div id="header">
        
            <div id="logo">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Amy Eliza Wong - Always On Purpose" /></a>
            </div>
            
			<div id="burger">
				<button class="clean-btn icon-btn burger-btn">
					<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M6 36h36v-4H6v4z"/><path d="M6 36h36v-4H6v4z" transform="translate(0 -10)"/><path d="M6 36h36v-4H6v4z" transform="translate(0 -20)"/></svg>
					<!--svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M6 36h36v-4H6v4zm0-10h36v-4H6v4zm0-14v4h36v-4H6z"/></svg-->
				</button>
			</div>

			<div id="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</div>

        </div>
				
				<div id="newsletter-form">
					<img src="<?= get_stylesheet_directory_uri(); ?>/images/signup.png" alt="Sign up to get the latest insights, ideas, and updates!">
					<form action="http://alwaysonpurpose.us8.list-manage.com/subscribe/post" method="POST">
						<input type="hidden" name="u" value="dddb6e702c3d9523c852c6d85">
						<input type="hidden" name="id" value="7711336f7b">
						<label for="MERGE1">First Name</label>
						<input type="text" name="MERGE1" id="MERGE1" value="" placeholder="First Name">
						<label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
						<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" value="" placeholder="Email">
						<input type="hidden" name="b_dddb6e702c3d9523c852c6d85_7711336f7b" value="">
						<input type="submit" class="button" name="submit" value="Yes, please!">
					</form>
				</div>
        
        <!--End Header-->
