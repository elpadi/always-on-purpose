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
				<blockquote><p>Amy does not tell me what to do or how to do it.  Instead she helps me develop my own set of tools so I can help myself overcome past barriers and reach my goals.</p></blockquote>
				<p>Suzy Lee</p>
			</li>
			<li>
				<blockquote><p>Her insightfulness and understanding of what is food for growth and expansion helped me break through the remaining barriers that I was creating for myself... I am now living a life that I thought I never could have.</p></blockquote>
				<p>Dr. Andrea Rosario</p>
			</li>
			<li>
				<blockquote><p>She's an amazing listener and unlike a psychologist she offers useful suggestions but in a way that have allowed me to arrive at my own conclusions.   I can say, without reservation, Amy has changed my life.</p></blockquote>
				<p>Stefan Brandes</p>
			</li>
			<li>
				<blockquote><p>Despite years of various forms of healing such as psychotherapy, depth hypnosis, and my mediation practice, Amy helped me to uncover hidden thought patterns and feelings that I wasn't aware I was holding.</p></blockquote>
				<p>Shauna Brandes</p>
			</li>
			<li>
				<blockquote><p>It was amazing the kind of internal movement, personal reflection and ultimately self-actualization that I accomplished in only a few sessions!</p></blockquote>
				<p>Ashley Rosales</p>
			</li>
		</ul>
		<div class="clear"></div>

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

