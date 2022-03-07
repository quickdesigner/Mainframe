<?php get_header(); ?>

<?php

if (is_single())
{
	if ( have_posts() ) : while ( have_posts() ) : the_post();

?>

	<div class="post-title-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
						<h2 class="post-title"><?php echo get_the_title();?></h2>
						<p><?php echo the_date();?></p>
					</div>
				</div>
				</div>
			</div>

	<div class="container content">
		<div class="row">
			<div class="col-sm-12">
				<div class="the_post">
					<?php echo the_content();?>
				</div><!-- /.the_post -->
			</div> <!-- /.col-sm-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container content -->

<?php
	endwhile; endif;
}
elseif (have_posts())
{
?>
	<div class="container content">
		<div class="row">
			<div class="col-sm-12">
				<div class="main_page_content">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
	        get_template_part( 'content', get_post_format() );
				endwhile; endif;
			?>

				</div>
			</div>
		</div>
	</div>

<?php
}

?>
<?php get_footer(); ?>
