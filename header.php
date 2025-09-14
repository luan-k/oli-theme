<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      /* Ensure elements are hidden while ScrollEntrance is loading */
      [data-entrance] { visibility: hidden; }
  </style>
    <? wp_head(); ?>
</head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TWLS6B74');</script>
<!-- End Google Tag Manager -->

<body <?php body_class(); ?> >
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWLS6B74"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header class="wkode-header font-montserrat text-oli-secondary-blue py-12 bg-oli-primary-blue">
  <div class="wkode-header__nav wkode-header__nav--top container">
    <div class="wkode-header__logo-wraper">
      <a class="" href="<?php echo esc_url(site_url()); ?>">
        <img data-entrance="from-left" class="logo" src="<?php echo get_theme_file_uri('/assets/img/logo.svg')?>" alt="<?php echo $logo_alt; ?>">
      </a>
    </div>
    <div class="wkode-header__nav wkode-header__nav--inner" id="navbarNavAltMarkup">
        <ul class="wkode-header__ul uppercase">
          <li class="wkode-header__li"> <a href="#planos"  class="">Planos</a> </li>
          <li class="wkode-header__li"> <a href="#sobre" class="">Soluçao Oli</a> </li>
          <li class="wkode-header__li"> <a href="#" id="openModalBtn" class="">Parcerias</a> </li>
          <li class="wkode-header__li"> <a href="https://linktr.ee/Oliappoficiall" target="_blank" id="" class="">Contato</a> </li>
          <li class="wkode-header__li"> <a href="https://linktr.ee/Oliappoficiall" target="_blank" id="" class="wkode-header__nav-button">Assine já!</a> </li>
        </ul>
    </div>
    <div class="wkode-header__hamburger-wrapper">
        <img class="wkode-header__hamburger" src="<?php echo get_theme_file_uri('/assets/img/ham.svg')?>" >
      </div>
  </div>
  
</header>
    
<div class="wraper relative" >