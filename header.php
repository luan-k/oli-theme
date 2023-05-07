<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <? wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="wraper" >
     <header class="wkode-header font-montserrat text-oli-secondary-blue pt-12">
      <div class="wkode-header__nav wkode-header__nav--top container">
        <div class="wkode-header__logo-wraper">
					<a class="" href="<?php echo esc_url(site_url()); ?>">
						<img class="logo" src="<?php echo get_theme_file_uri('/assets/img/logo.svg')?>" alt="<?php echo $logo_alt; ?>">
					</a>
				</div>
        <div class="wkode-header__nav wkode-header__nav--inner" id="navbarNavAltMarkup">
            <ul class="wkode-header__ul">
              <li class="wkode-header__li"> <a href="" class="">Home</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Sobre o App</a>  </li>
              <li class="wkode-header__li"> <a href="" class="">Planos</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Contato</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Siga-nos</a> </li>
            </ul>
            <nav class="wkode-header__icons-wrapper">
              <a target="_blank" class="wkode-header__social-media-icon" href="#" >
                <img src="<?php echo get_theme_file_uri('/assets/img/instagram.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="#" >
                <img src="<?php echo get_theme_file_uri('/assets/img/facebook.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="#" >
                <img src="<?php echo get_theme_file_uri('/assets/img/youtube.svg'); ?>" alt="" class="">
              </a>
              <a target="_blank" class="wkode-header__social-media-icon" href="#" >
                <img src="<?php echo get_theme_file_uri('/assets/img/whatsapp.svg'); ?>" alt="" class="">
              </a>
            </nav>
        </div>
        <div class="wkode-header__hamburger-wrapper">
						<img class="wkode-header__hamburger" src="<?php echo get_theme_file_uri('/assets/img/ham.svg')?>" >
					</div>
      </div>
      
    </header>