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
 * @package SimpleSite
 */

get_header(); ?>
</header>
<div class ="container">
	<div class ="row"> 
		<div class ="main-visual col-xs-12">
			<h1>はじめてのWP：Home.php</h1>
		</div>
	</div>
	<div class = "top-page-contents row">
		<?php
			$postslist = get_posts( array( 'posts_per_page' => 6, 'post_type'=> 'page','order'=> 'ASC'));
			foreach ($postslist as $post) : setup_postdata($post);
		?>
		<div class ="col-md-4">
			<?php echo($post->post_title) ?>
		</div> 
		<?php endforeach; ?>
	</div>
</div>		
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<div class="posts-layout">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
				get_template_part( 'template-parts/content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>
	
	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
