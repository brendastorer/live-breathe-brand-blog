<?php
/*
Template Name: column
*/
?>

<article <?php post_class(); ?>
  <a href="<?php the_permalink();?>">
    <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      the_post_thumbnail();
      }
    ?>
  </a>
  <div class="column-post">
    <h3 class="column-post-title">
      <a href="<?php the_permalink();?>">
        <?php the_title(); ?>
      </a>
    </h3>
    <div class="column-post-content">
      <?php
        if(!get_post_format()) {
          echo the_excerpt();
        }
        else {
          echo the_content();
        }
      ?>
    </div>
  </div>
  <footer class="column-post-footer">
    <div class="column-post-icon">
      <?php
        if ( has_post_format( 'status' )) {
          echo '<span class="icon-twitter"></span>';
        }
        else if ( has_post_format( 'quote' )) {
          echo '<span class="icon-quote"></span>';
        }
        else if ( has_post_format( 'image' )) {
          echo '<span class="icon-instagram"></span>';
        }
        else {
          echo '<span class="icon-pencil"></span>';
        }
      ?>
    </div>
    <span class="column-post-date"><?php the_time('F j, Y');?></span>
  </footer>
</article>
