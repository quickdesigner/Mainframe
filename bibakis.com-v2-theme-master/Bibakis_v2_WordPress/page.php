<?php get_header(); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="page-title-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="page-title"><?php echo get_the_title();?></h2>
			</div>
		</div>
	</div>
</div>

<div class="container content">
	<div class="row">
		<div class="col-sm-12">
			<div class="the_page">
				<?php echo the_content();?>

			</div><!-- /.the_page -->
		</div> <!-- /.col-sm-12 -->
	</div> <!-- /.row -->
</div> <!-- /.container content -->
<?php
endwhile; endif;
?>

<?php get_footer(); ?>
