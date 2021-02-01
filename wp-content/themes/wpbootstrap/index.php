<?php get_header(); ?>

<?php 
	query_posts('posts_per_page=1');
	while(have_posts()) : the_post(); 
?>
<div class="jumbotron">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
</div>
<?php endwhile; wp_reset_query(); ?>


<div class="panel panel-default panel-body">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</div>
		<div class="col-md-10">
			<?php while(have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
				<p> posted by <?php the_author(); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>