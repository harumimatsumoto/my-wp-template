<?php
/**
 * The main template file.
 *
 * This is the most generic templa
 * te file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SimpleSite
 */

get_header(); ?>
</header>
<div class = "container">
	<div class = "row main-visual"> 
		<div class = "col-xs-12 text-center">
			<h1><?php bloginfo( 'name' ); ?></h1>
		</div>
		<img href ="<?php bloginfo('template_url')?>"></img>
	</div>
	<div class = "row top-page-contents">
		<?php
			$categories = get_categories(array('orderby'=>'term_id'));
			foreach($categories as $category) :
		?>		
			<div class ="col-md-4">
				<div class ="top_contents">			
					<h2 class = "text-center" >
					<a href="<?php echo get_category_link( $category->term_id ); ?>">
							<?php echo $category->cat_name; ?>
						</a>
					</h2>
					<ul class ='top_lists'>
					<?php
						query_posts('cat='.$category->cat_ID);
						if (have_posts()) : while (have_posts()) : the_post();
					?>
						<li class = "text-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
					<?php endwhile; endif; ?>
					</ul>
				</div>
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
