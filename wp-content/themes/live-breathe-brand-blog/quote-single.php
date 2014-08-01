<?php get_header(); ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post post-quote">

						<h1 class="title"><?php the_title(); ?></h1>
						<div class="post-meta">
							<?php the_time('m.d.Y'); ?>
							<?php // the author(); Uncomment this and it will display the post author ?>

						</div><!--/post-meta -->

						<div class="the-content">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>
						</div><!-- the-content -->

						<div class="meta clearfix">
							<div class="category"><?php echo get_the_category_list(); ?></div>
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></div>
						</div><!-- Meta -->

					</article>

				<?php endwhile; ?>

				<?php

					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
