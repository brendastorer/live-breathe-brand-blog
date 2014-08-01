<?php
  $the_cat = get_the_category();
  $category_name = $the_cat[0]->cat_name;
  $category_link = get_category_link( $the_cat[0]->cat_ID );
?>
<div class="column-category-link">
  <a href="<?php echo $category_link ?>" title="<?php echo $category_name ?>">All <?php echo $category_name ?> Posts</a>
</div>
