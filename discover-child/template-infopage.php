<?php /* Template Name: Info Page
*/ ?> 

<?php get_header(); ?>

<div id="subhead_container">

	<div class="row" id="content_container">
		<div class="eight columns" style="float:right;">
			<h1><?php the_title(); ?></h1>
			<?php /*$fields = CFS()->get();   print_r ($fields); echo "<br>MH ". $fields['name'];*/ ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post();  endwhile; ?>
			<div class="post-entry">
				<?php the_content(); ?>
			</div>
			<div class="clear"></div>
		</div> 
		<?php get_sidebar('info'); ?>
	</div> 
		

<?php get_footer(); ?>

</div>