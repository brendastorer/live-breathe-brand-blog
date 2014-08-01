<?php get_header();
	include 'partials/navigation.php';
?>

<div class="column-container" id="js-column-1">
	<section class="home-category-posts live">
		<?php
			query_posts('cat=2');
			while (have_posts()) : the_post(); ?>
	      <?php include 'partials/column.php'; ?>
		<?php endwhile; ?>
		<?php include 'partials/category-link.php' ?>
	</section>
</div>

<div class="column-container breathe" id="js-column-2">
	<section class="home-category-posts breathe">
		<?php
			query_posts('cat=3');
			while (have_posts()) : the_post(); ?>
				<?php include 'partials/column.php'; ?>
		<?php endwhile; ?>
		<?php include 'partials/category-link.php' ?>
	</section>
</div>

<div class="column-container" id="js-column-3">
	<section class="home-category-posts brand">
		<?php
			query_posts('cat=4');
			while (have_posts()) : the_post(); ?>
				<?php include 'partials/column.php'; ?>
		<?php endwhile; ?>
		<?php include 'partials/category-link.php' ?>
	</section>
</div>
