<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
        
	<!--Home Feature-->
	<div id="homeFeature">
	
		<!--Feature Image-->
	    <div id="featureImage">
	    
				<a href="<?php echo get_permalink(COACHING_PAGE_ID); ?>"><img src="<?php bloginfo('template_url'); ?>/images/img_homeFeature.jpg" /></a>
	    
	    </div>
	    <!--End Feature Image-->
	    
	<!--End Home Feature-->
	</div>
	<div class="clear"></div>
	
	<div id="content">
		<!--Testimonials-->
		<ul id="testimonials">
			<li>
				<blockquote><p>Amy Wong is a powerhouse. Whether you’re looking for a dynamic keynote speaker to ignite your event, a skilled trainer to deliver an impactful workshop for your leaders or teams, or an experienced coach to help take your life and career to the next level, Amy can do it. </p></blockquote>
				<p>Mike Robbins, author of Nothing Changes Until You Do</p>
			</li>
				<li>
				<blockquote><p>Brandy helped me to reach my goals, and I recommend her as a life coach without reservation. She has the unique ability to help you find your own tools and believe in yourself… I am confident you will be happy with her services.</p></blockquote>
				<p>R. Alarian</p>
			</li>
			<li>
				<blockquote><p>Amy's insightfulness and understanding of what is food for growth and expansion helped me break through the remaining barriers that I was creating for myself... I am now living a life that I thought I never could have.</p></blockquote>
				<p>Dr. Andrea Rosario</p>
			</li>
			<li>
				<blockquote><p>It was amazing the kind of internal movement, personal reflection and ultimately self-actualization that I accomplished in only a few sessions!</p></blockquote>
				<p>Ashley Rosales</p>
			</li>
			<li>
				<blockquote><p>Brandy’s coaching was really empathetic. She helped me pursue the things I wanted but was too afraid to take action on. She also helped me to stop doubting myself and to start focusing on the things that energize me and feel engaging to me. Her coaching creates tangible results…</p></blockquote>
				<p>M. Inzunza</p>
			</li>
			<li>
				<blockquote><p>Thank you, Amy, for a life changing session at our company’s conference in Vegas last week. That is not an exaggeration. What you taught us about listening to connect is so powerful, it’s like a mantra for me now. Hope we get to work with you again.</p></blockquote>
				<p>Daniel Verrico</p>
			</li>
		</ul>
		<div class="clear"></div>

		<!-- home page video before blog posts -->
		<?php if ( is_home() && function_exists('aop_home_video') ) aop_home_video(); ?>

		<div class="blog-content">
		<!--Content-->

					<?php
					/* Run the loop to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-index.php and that will be used instead.
					 */
					 get_template_part( 'loop', 'index' );
					?>
        
		</div>
		<!--End Content-->
	</div>
        
	<div class="col sidebar"><?php get_sidebar(); ?></div>
	<div class="clear"></div>
<?php get_footer(); ?>

