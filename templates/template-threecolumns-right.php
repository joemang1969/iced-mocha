<?php /*
 * Template Name: Three columns, Sidebars on the Right
 *
 * @package Iced Mocha
 * @subpackage iced_mocha
 * @since iced_mocha 0.5
 */
get_header(); ?>

		<section id="container" class="three-columns-right">
	
			<div id="content" role="main">

				<?php get_template_part( 'content/content', 'page'); ?>

			</div><!-- #content -->
			<?php get_sidebar('left'); get_sidebar('right'); ?>
		</section><!-- #container -->


<?php get_footer(); ?>