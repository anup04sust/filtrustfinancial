<?php
/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
?>
<div <?php post_class(); ?>>
  <?php if (is_singular() || is_page()): ?>
    <div class="entry-content">   
      <?php the_content(); ?> 
    </div>
  <?php elseif (1): ?>
  <?php endif; ?>

</div>
