<?php
/*
 * Template Name: Customer Info Form
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
get_header();
global $eli_options;
get_template_part('templatepart/page', 'banner');
?>
<section id="inner-content" class="sidebar-custom-inner">
  <div class="<?php theme_layout_style(); ?>">
    <div class="row">
      <div class="entry-content col-xs-12 col-sm-8 col-md-9">
        <form id="customer-informations" method="post" action="<?php the_permalink() ?>" enctype="multipart/form-data" autocomplete="on">
          <div id="customer-informations-stps">
            <?php if(!empty($_POST)) wpprint($_POST);?>
           <?php get_template_part('form-templates/tab','navbar');?>                   
           <?php get_template_part('form-templates/tab','borrows');?>                   
           <?php get_template_part('form-templates/tab','status');?>                   
           <?php get_template_part('form-templates/tab','employment');?>                   
           <?php get_template_part('form-templates/tab','additional');?>                   
           <?php get_template_part('form-templates/tab','personal');?>                   
           <?php get_template_part('form-templates/tab','loan');?>                   
          </div>
        </form>
        <?php
        if (have_posts()):
          while (have_posts()): the_post();
            the_content();
          endwhile;
        endif;
        ?>
      </div>
      <div class="entry-sidebar col-xs-12 col-sm-4 col-md-3">
        <?php get_sidebar('customer-info'); ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
