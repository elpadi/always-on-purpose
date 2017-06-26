<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
  Template Name: Blog
 */

get_header(); ?>
<?php
/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
function post_is_in_descendant_category( $cats, $_post = null )
{
	foreach ( (array) $cats as $cat ) {
		// get_term_children() accepts integer ID only
		$descendants = get_term_children( (int) $cat, 'category');
		if ( $descendants && in_category( $descendants, $_post ) )
			return true;
	}
	return false;
}
?>

		
        <!--Content-->
        <div id="content">
        
        	<div class="col">
            
                <?php $category_slug = get_post_meta($post->ID, 'Blog', true); ?>
                <?php query_posts( 'category_name=Blog' ); ?>
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
                    
                    <?php the_excerpt(); ?>
                    
                    </div>
                    <div class="post-comments">
                    
                        <div class="post-comments-wrapper">
                            <?php comments_number('0 Comments', '1 Comment', '% Comments' );?>
                        </div>
                        <div class="clear"></div>
                    
                    </div>
                
                </div>
                <div class="clear"></div>
                
                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div class="clear"></div>
                <div class="nav-previous"><?php next_posts_link( __( '<span style="color:#333"><span class="meta-nav">&larr;</span> More Posts</span>', 'twentyten' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( '<span style="color:#333">Previous Posts <span class="meta-nav">&rarr;</span></span>', 'twentyten' ) ); ?></div>
                <div class="clear"></div>
				<?php endif; ?>
                
                <?php endwhile; // end of the loop. ?>
                <?php wp_reset_query(); ?>
            
            </div>
            
            <div class="col sidebar">
                
                <?php get_sidebar(); ?>
                            
            </div>
            <div class="clear"></div>
        
        </div>
        <!--End Content-->
        
<?php get_footer(); ?>
