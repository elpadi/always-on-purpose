<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<!--Content-->
        <div id="content">
        
        	<div class="col">
    			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
                <div class="post-wrapper">
                
                	<div class="post-header">
                    
                    	<div class="post-date"><?php the_date('m-d-Y'); ?></div>
                        <div class="post-title">
                        
                        	<h1><a href="/?p=<?php echo $post->ID; ?>"><?php the_title(); ?></a></h1>
                        
                        </div>
                        <div class="clear"></div>
                    
                    </div>
					<div class="post-content">
                    
                    <?php the_content(); ?>
                    
                    </div>
                    <div class="post-comments">
                    
                        <div class="post-comments-wrapper">
                            <?php comments_number('0 Comments', '1 Comment', '% Comments' );?>
                        </div>
                        <div class="clear"></div>
                        
                        <?php comments_template( '', true ); ?>
                    
                    </div>
                
                </div>
                <div class="clear"></div>
                
                <?php endwhile; // end of the loop. ?>
            
            </div>
            
            <div class="col sidebar">
                
                <?php get_sidebar(); ?>
                            
            </div>
            <div class="clear"></div>
        
        </div>
        <!--End Content-->
        
<?php get_footer(); ?>