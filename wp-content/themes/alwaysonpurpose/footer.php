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
					<p><a href="<?php echo get_permalink(6); ?>">Amy Eliza Wong</a> - <a href="<?php echo get_permalink(8); ?>">Always On Purpose® Life Coach</a></p>
					<p><a href="mailto:amy@alwaysonpurpose.com">amy@alwaysonpurpose.com</a> • <a href="tel:415-999-7556">415-999-7556</a> / <a href="tel:916-542-8220">916-542-8220</a></p>
					<p>5901 Belmont Park Fair Oaks, CA 95628</p>
					<p class="fine">© 2014 Amy Wong,  Always On Purpose • Site & Branding By Sheila Buchanan</p>
					<ul class="social-media-links">
						<li class="twitter"><a href="http://twitter.com/#!/amyelizawong" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_twitter.jpg"></a></li>
						<li class="facebook"><a href="<?php echo FACEBOOK_URL; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_facebook.jpg"></a></li>
					</ul>
        </div>
        <!--End Footer-->
    
    </div>
    <div class="clear"></div>
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
