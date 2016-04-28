<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php get_header(); ?>
    <?php
      if(!is_category()) {
        $key = 'showcase_image';
        $showcase = get_post_meta($post->ID, $key, TRUE);
        if($showcase != '') {
          if($showcase != '0') {
            echo '      <div class="showcase lp ' . $showcase . '">' . "\r\n";
            echo '        <div class="wrapper">' . "\r\n";
            echo '          <div class="cta">' . "\r\n";
              if($showcase == 'for-attorneys') {
                echo '            Filed A Claim?<br/>' . "\r\n";
                echo '            Client Needs Cash?<br/>' . "\r\n";
                echo '            We Can Help.<br/>' . "\r\n";
              } else {
                echo '            Hired A Lawyer?<br/>' . "\r\n";
                echo '            Filed A Claim?<br/>' . "\r\n";
                echo '            Get Cash Now.<br/>' . "\r\n";
              }
            echo '            <div class="contactUs">Contact MyUSClaims</div>' . "\r\n";
            echo '            <div class="btn"><a href="/contact-us/">Act Now</a></div>' . "\r\n";
            echo '          </div>' . "\r\n";
            echo '        </div>' . "\r\n";
            echo '      </div><!-- showcase -->' . "\r\n";
          }
        }
      }
    ?>
    <div class="wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post">
        <div class="content">
          <?php
            if(is_category()) {
              $key = 'showcase_image';
              $showcase = get_post_meta($post->ID, $key, TRUE);
              if($showcase != '') {
                if($showcase != '0') {
                  echo $showcase;
                }
              }
            }
          ?>
          <div class="title"><?php the_title(); ?></div>
          <!--// <div class="date">Posted on <?php the_time('F jS, Y') ?></div> //-->
          <div class="article">
          <?php the_content(__('(more...)')); ?>
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
