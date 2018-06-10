<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ByWire_News
 */

get_header();
?>

<section>
	<div class="container my-5">
		<div class="row megaMargin mobileMarginTop mb-3">
			<div class="col-md-12">
				<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="page">

					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo apautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
			</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
