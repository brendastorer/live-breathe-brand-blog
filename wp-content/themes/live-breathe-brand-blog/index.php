<?php get_header();?>

<nav class="category-navigation">
  <div class="column-category-title">
    <a href="/category/live" class="live-navigation">
      Live.
    </a>
  </div>
  <div class="column-category-title breathe">
    <a href="/category/breathe" class="breathe-navigation">
      breathe.
    </a>
  </div>
  <div class="column-category-title">
    <a href="/category/brand" class="brand-navigation">
      Brand.
    </a>
  </div>
</nav>

	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">
			<div class="category-posts">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php include 'partials/column.php'; ?>

					<?php endwhile; ?>

				</div>

				<!-- pagination -->
				<div id="pagination">
					<div class="past-page"><?php previous_posts_link ( 'newer') ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); ?></div>
				</div><!-- pagination -->

			<?php else : ?>

				<article class="post error">
					<h1 class="404">Sorry, nothing has been posted like that yet</h1>
				</article>

			<?php endif;?>
		</div>
	</div>
