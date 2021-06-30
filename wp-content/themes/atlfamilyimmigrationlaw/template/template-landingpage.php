<?php
/*
Template Name: ALT Landing Page
*/

//get_header('landingpage-header'); 

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
get_header();
/*
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/pglandingstyles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landingpgresponsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/script/all.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); 

  $header_logo_left_title = get_theme_mod('landing_header_logo_left_title');
  $header_logo =  get_theme_mod('landing_header_logo');
  $logo_img_id = attachment_url_to_postid(get_theme_mod('landing_header_logo'));
  $logo_imgalt = get_post_meta($logo_img_id, '_wp_attachment_image_alt', true);
  $header_logo_right_title = get_theme_mod('landing_header_logo_right_title');
  ?>
  <header id="landing-page-header">
    <div class="header">
      <div class="headerbox headerbox1">
        <?php if($header_logo_left_title){ ?>
          <h6><?php echo $header_logo_left_title; ?></h6>
      <?php } ?>
      </div>
      <div class="headerbox headerbox1">
        <?php if($header_logo){ ?>
          <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
              <img src="<?php echo $header_logo; ?>" alt="<?php echo $logo_imgalt; ?>" />   </a>
          </div>
      <?php } ?>
      </div>
      <div class="headerbox headerbox1">
        <?php if($header_logo_right_title){ ?>
          <h5><?php echo $header_logo_right_title; ?></h5>
        <?php } ?>
      </div>
      
    </div>
  </header>
<?php 
*/
$landing_small_title = CFS()->get('_landing_page_small_title');
$landing_subtitle = CFS()->get('_landing_page_subtitle');
$landing_chapter_loop = CFS()->get('_landing_page_chapter_loop');

$chapter_hover_title = CFS()->get('_chapter_hover_title');
$last_box_content = CFS()->get('_last_box_content');
$learn_more_button_title = CFS()->get('_learn_more_button_title');
$learn_more_button_link = CFS()->get('_learn_more_button_link');
?>
 <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/pglandingstyles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landingpgresponsive.css">
<div class="content landing-page-wr">
  <div class="contentwrp">
    <div class="section-title">
      <?php if($landing_small_title){ ?>
        <h6><?php echo $landing_small_title; ?></h6>
      <?php }
      if($landing_subtitle){ ?>
        <h1><?php echo $landing_subtitle; ?></h1>
      <?php } ?>
    </div>
    <div class="contentbox">
      <div class="contentboxwrp">
      <!-- start box -->
        <?php 
        foreach ($landing_chapter_loop as $lp_chapterval) {
          $chapter_image = wp_get_attachment_image_src($lp_chapterval['_chapter_image'], 'full' );
          $chapter_image_alt = get_post_meta($lp_chapterval['_chapter_image'], '_wp_attachment_image_alt', true );
        ?>
        
          <div class="chapter-bx-wr">
              <div class="chapter">
                <a href="<?php echo $lp_chapterval['_chapter_page_link']; ?>">
                <div class="chapter-imgbox">
                  <img src="<?php echo $chapter_image[0]; ?>" alt="<?php echo $chapter_image_alt; ?>" />
                </div>
                <div class="chapter-contentbox">
                  <h4><?php echo $lp_chapterval['_chapter_title']; ?> <i class="fas fa-long-arrow-alt-right"></i> </h4>
                  <h5><?php echo $lp_chapterval['_chapter_subtitle']; ?></h5>
                  <div class="chanpter-cntnt"><?php echo $lp_chapterval['_chapter_content_box']; ?></div>
                  <div class="progress-container">
                    <span>progress</span>
                    <div class="progress">
                      <div class="bar" style="width: <?php echo $lp_chapterval['_progress_bar']; ?>">
                      <p class="percent"></p>
                    </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
          </div>
        <?php } 

        if($chapter_hover_title || $last_box_content || $learn_more_button_link || $learn_more_button_title){
        ?>
          <div class="last-boxwr chapter-bx-wr">
            <div class="chapter hoverchapter">
              <div class="list">
                <div class="listwrp">
                  <h5><?php echo $chapter_hover_title; ?></h5>
                  <div class="cntntchpter"><?php echo $last_box_content; ?></div>
                  <?php 
                  if($learn_more_button_link && $learn_more_button_title) { ?>
                    <a class="learnmorebtn" href="<?php echo $learn_more_button_link; ?>" target="_blank" rel="noopener noreferrer"><?php echo $learn_more_button_title; ?></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php /*
$landing_footer_title = get_theme_mod('landing_footer_title');
$landing_footer_content = get_theme_mod('landing_footer_content');
?>
  <footer>
    <div class="footer">
        <div class="footer-heading">
          <?php if($landing_footer_title){ ?>
            <h5><?php echo $landing_footer_title; ?></h5>
          <?php } ?>
        </div>
        <?php if($landing_footer_content){ ?>
      <div class="footer-bottom">
        <p><?php echo $landing_footer_content; ?></p>
      </div>
      <?php } ?>
    </div>
  </footer>
  </body>
</html>
<?php */

get_footer(); ?>



<?php  // get_footer('landingpage-footer'); ?>