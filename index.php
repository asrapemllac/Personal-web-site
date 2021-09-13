
<!DOCTYPE html>
<html lang="fa-IR">
<head>

<title>Parsa Reis Danaei</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>

<body>
<?php get_header(); ?>
    <?php

$args = array(
  'posts_per_page'   =>'',
  'offset'           => '',
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'post_date',
  'order'            => 'desc',
  'include'          => '',
  'exclude'          => '',
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'post',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'post_status'      => 'publish',
  'suppress_filters' => true );



    $myposts = get_posts( $args );
    foreach ( $myposts as $post )  ?>
      <?php get_sidebar() ?>

<div class="main">
    <h1><?php the_title() ?></h1>
    <div id="slider">
        <div  class="slide active">
          <a href="https://www.instagram.com/reisdanaeicoin/"target="_blank">
            <img src="<?php bloginfo('template_url')?>/style/Slide-home/Untitled1.jpg" alt="">
          </a>
        <div class="text">
Instagram        </div>
        </div>
        <div  class="slide">
          <a href="https://castbox.fm/va/4086324"target="_blank">
            <img src="<?php bloginfo('template_url')?>/style/Slide-home//Untitled2.jpg" alt="">
          </a>
          <div class="text">
CastBox
        </div>
          </div>
            <a href="#" class="perv">&#10094;</a>
            <a href="#"class="next">&#10095;</a>
            
         </div>
         <div id="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
          </div>
          <p>
          <?php the_content() ?>
         </p>

</div>

</div>

<?php get_footer(); ?>

</body>
