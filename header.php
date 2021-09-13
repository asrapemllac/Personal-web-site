<!DOCTYPE html>
<html lang="fa-IR">
<head>
<title>Parsa Reis Danaei</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
</head>
<body>
<div class="header">
        <h1>پارسا رئیس دانائی </h1>
        <p>صفحه شخصی</p>
      </div>
      <div class="navbar">
          <ul class="nav" >
          <?php
                        $defaults = array(
                            'theme_location'  => '',
                            'menu'            => 'top_menu',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="nav">%3$s</ul>',
                            'depth'           => 1,
                            'walker'          => ''
                        );

                        wp_nav_menu( $defaults );

                        ?>
          </ul>
      </div>
      </body>


                  