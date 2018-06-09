<?php if(is_search() || is_archive()) : ?> <!--this check to make sure its an arhicve page or blog ppage-->
<div class="archive-post">
	<h4>
		<a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
		</a>
	</h4>
	<p><small>Posted On: <?php the_time('F j, Y g:i a'); ?></small></p>
</div>
<?php else : ?>
<article class="post">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p class="meta"><small><em>
		Posted at
		<?php the_time('F j, Y g:i a'); ?>
		by
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
		<?php the_author(); ?>
		</a> |
		Posted In
		<?php
			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if($categories){
				foreach($categories as $category){
					$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'. $separator;
				}
			}

			echo trim($output, $separator);
			?>
		</em></small>
	</p>

	<?php if(is_single()) : ?> <!--if single blog post, we want content else we want the excerpt-->
		<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail my-4">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>
	<?php the_content(); ?>
	<?php else : ?>
	<?php the_excerpt(); ?>
	<a class="button btn outline-secondary" href="<?php the_permalink(); ?>">Read More</a>
	<?php endif; ?>
	<hr />
</article>
<?php endif; ?>
