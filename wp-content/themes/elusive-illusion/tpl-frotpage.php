<?php
/*
 * Template Name: Front Page
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
get_header();
global $eli_options;
?>  
        <?php get_template_part('templatepart/home', 'slider'); ?> 
        <section id="inner-content">
          <div class="<?php theme_layout_style(); ?>">
            <div class="row">
              <div class="entry-content col-xs-12">
                <?php
                if (have_posts()):
                  while (have_posts()): the_post();
                    the_content();
                  endwhile;
                endif;
                ?>
              </div>
            </div>
          </div>
        </section>
<?php get_template_part('templatepart/tweetie', 'carousel'); ?> 
<?php get_template_part('templatepart/bottom', 'widgets'); 
get_footer();