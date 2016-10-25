<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>

    <!--META TAGS -->
    <meta charset="<?php  bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description' ); ?>">
    <meta name="author" content="<?php bloginfo('author' ); ?>">

    <title>
      <?php bloginfo('name' );  ?> |
      <?php is_front_page() ? bloginfo('description' ) : wp_title(); ?>
    
        
      </title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <script src="https://use.fontawesome.com/f759c87e92.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    



    <!-- <div class="nav-wrapper"> -->
    <nav class="site-nav">
      <h1>
      <a href="<?php echo get_home_url(); ?>">
      <img src="<?php bloginfo('template_url'); ?>/img/logoWIEDZA.svg" alt="" class="logo">
      </a>
      </h1>
      <?php wp_nav_menu( ); ?>
  
    <footer class="site-footer">
      
      
        <h3>Wiedza.pl Zuzanna Smak</h3>
        <p>
          ul. Krótka 1, 08-400 Garwolin<br>
          NIP: 826-101-28-68<br>
          tel: 694011512<br>
          Sekretariat 8.00-16.00
        </p>
      <ul class="social-bar menu horizontal text-center">
        <li>  
          <a href="http://www.facebook.com/wiedza.pl.garwolin">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            </li>
        
        <li>
          <a href="mailto:wiedza.sekretariat@gmail.com">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
          </li>
        <li>
        <a href="tel:694011512">
        <i class="fa fa-phone-square" aria-hidden="true">  
        </i>
        </a>
        </li>
        
      </ul>
    </footer>
  </nav>
