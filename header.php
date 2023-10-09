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
	<div class="wraper relative" >
     <header class="wkode-header font-montserrat text-oli-secondary-blue py-12 bg-oli-primary-blue">
      <div class="wkode-header__nav wkode-header__nav--top container">
        <div class="wkode-header__logo-wraper">
					<a class="" href="<?php echo esc_url(site_url()); ?>">
						<img data-entrance="from-left" class="logo" src="<?php echo get_theme_file_uri('/assets/img/logo.svg')?>" alt="<?php echo $logo_alt; ?>">
					</a>
				</div>
        <div class="wkode-header__nav wkode-header__nav--inner" id="navbarNavAltMarkup">
            <ul class="wkode-header__ul uppercase">
              <li class="wkode-header__li"> <a href="#hero" class="">Soluçao Oli</a> </li>
              <li class="wkode-header__li"> <a href="#planos" class="">Planos</a> </li>
              <li class="wkode-header__li"> <a href="#siganos" class="">Seja vendedor</a> </li>
              <li class="wkode-header__li"> <a href="#siganos" class="">Seja parceiro</a> </li>
              <li class="wkode-header__li"> <a href="#siganos" class="">Seja anunciante</a> </li>
            </ul>
            <nav data-entrance="from-right" class="wkode-header__icons-wrapper">
              <a target="_blank" class="wkode-header__social-media-icon" href="https://www.instagram.com/oliappoficial/" >
                <img src="<?php echo get_theme_file_uri('/assets/img/instagram.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="https://www.facebook.com/oliappoficial" >
                <img src="<?php echo get_theme_file_uri('/assets/img/facebook.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="https://www.youtube.com/@OliVideos-cv1wm/featured" >
                <img src="<?php echo get_theme_file_uri('/assets/img/youtube.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="https://wa.me/5541997120295" >
                <img src="<?php echo get_theme_file_uri('/assets/img/whatsapp.svg'); ?>" alt="" class="">
              </a>
            </nav>
        </div>
        <div class="wkode-header__hamburger-wrapper">
						<img class="wkode-header__hamburger" src="<?php echo get_theme_file_uri('/assets/img/ham.svg')?>" >
					</div>
      </div>
      
    </header>