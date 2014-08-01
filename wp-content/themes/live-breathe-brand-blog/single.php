<?php get_header();?>

<div <?php post_class();?>>
	<div id="primary" class="row-fluid" >
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post();?>

					<article <?php post_class();?>>
						<section class="single-header">
							<h1 class="title"><?php the_title(); ?></h1>
							<?php
					      if ( has_post_thumbnail() ) {
					      the_post_thumbnail();
					      }
					    ?>
						 </section>

						<section class="the-content">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>
						</section>

						<div class="single-post-meta">
							<div class="date"><?php the_time('F j, Y');?></div>
							<div class="author"><?php // the author(); Uncomment this and it will display the post author ?></div>
							<div class="category">Category: <?php echo get_the_category_list(); // Display the categories this post belongs to, as links ?></div>
							<div class="tags"><?php echo get_the_tag_list( 'Tags: ', ', &nbsp;', '' ); ?></div>
						</div><!-- Meta -->


					</article>

				<?php endwhile; ?>

				<div class="single-post-comments">
					<?php
						if ( comments_open() || '0' != get_comments_number() )
							comments_template( '', true );
					?>
				</div>


			<?php else : ?>

				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; ?>

		</div>
	</div>
</div>
