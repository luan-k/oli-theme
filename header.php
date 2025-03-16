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

<body <?php body_class(); ?> >
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
          <li class="wkode-header__li"> <a href="#" id="openModalBtn2" class="">Contato</a> </li>
          <li class="wkode-header__li"> <button href="#" id="openModalBtn3" class="wkode-header__nav-button">Assine já!</a> </li>
        </ul>
    </div>
    <div class="wkode-header__hamburger-wrapper">
        <img class="wkode-header__hamburger" src="<?php echo get_theme_file_uri('/assets/img/ham.svg')?>" >
      </div>
  </div>
  
</header>
    
<div class="wraper relative" >