<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	<!--Footer-->
        <div id="footer">
			<p><a href="<?php echo get_permalink(8); ?>">Always On Purpose® Coaching</a></p>
			<p><a href="mailto:info@alwaysonpurpose.com">info@alwaysonpurpose.com</a><span class="separator"> • </span><a href="tel:415-999-7556">415-999-7556</a><span class="separator"> / </span><a href="tel:916-542-8220">916-542-8220</a></p>
			<p>2120 University Ave, Berkeley CA 94707</p>
			<ul class="social-media-links">
				<li class="twitter"><a href="https://www.linkedin.com/in/amyelizawong/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_twitter.jpg"></a></li>
				<li class="facebook"><a href="<?php echo FACEBOOK_URL; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_facebook.jpg"></a></li>
				<li class="instagram"><a href="https://www.instagram.com/amyelizawong/?hl=en" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_instagram.png"></a></li>
			</ul>
			<p class="fine">© 2019 Joy Container, LLC,  Always On Purpose</p>
        </div>
        <!--End Footer-->
    </div>
    <!--End Content Wrapper-->
</div>
<!--End Wrapper-->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
