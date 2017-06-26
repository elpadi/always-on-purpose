<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

				<img src="<?php bloginfo('template_url'); ?>/images/woods.jpg" alt="Be in love with your life. Every moment of it." />
                
				<h2>Most Popular</h2>
				<ul class="popular">
					<?php foreach (aop_popular_posts() as $p): ?>
					<li><a href="<?php echo get_permalink($p->ID); ?>" title="<?php echo $p->post_title; ?>"><?php echo $p->post_title; ?></a></li>
					<?php endforeach; ?>
				</ul>
				
				<h2>Connect With Me</h2>
				<p>Follow me on <a href="http://twitter.com/#!/amyelizawong" target="_blank">Twitter</a>.
				<br />Follow me on <a href="<?php echo FACEBOOK_URL; ?>" target="_blank">Facebook</a>.</p>
                
				<h2>Categories</h2>
				<ul class="categories"><?php wp_list_categories('orderby=name&order=ASC&show_count=0&title_li=&child_of=3'); ?></ul>
                
				<h2>Archives</h2>
				<ul class="archives"><?php wp_get_archives('type=monthly&limit=12'); ?></ul>
