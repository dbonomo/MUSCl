<?php
/*
Template Name: Form
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php get_header(); ?>
    <div class="wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="form">
        <div class="content">
          <div class="title"><?php the_title(); ?></div>
          <div class="subtitle">For fastest service, call your account executive at 800-270-2579.</div>
          <!--// <div class="date">Posted on <?php the_time('F jS, Y') ?></div> //-->
          <div class="article">
          <?php the_content(); ?>
          </div>
        </div>
      </div>
      <?php endwhile; else: ?>
      <div class="post">
        <div class="content">
          <div class="article">
          <?php _e('<div class="title">Looking for something at MyUSClaims.com?</div>The URL/page you requested does not exist. If you have any questions, do not hesitate to call us.'); ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
<?php get_footer(); ?>
</html>
