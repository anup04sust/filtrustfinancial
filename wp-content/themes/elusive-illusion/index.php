<?php
/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
get_header();
global $eli_options;
?>  
 <?php get_template_part('templatepart/page', 'banner'); ?> 
<section id="inner-content" class="sidebar-left-inner">
          <div class="<?php theme_layout_style(); ?>">
            <div class="row">
              <div class="page-contents col-xs-12 col-sm-8 col-md-9">
                <?php
                if (have_posts()):
                  while (have_posts()): the_post();
                  get_template_part('content',get_post_format());
                  endwhile;
                else:
                   get_template_part('content','none');
                endif;
                ?>
              </div>
              <div class="entry-sidebar col-xs-12 col-sm-4 col-md-3">
                <?php get_sidebar();?>
              </div>
            </div>
          </div>
        </section>
<?php
get_footer();