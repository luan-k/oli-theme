<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <? wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="wraper" >
     <header class="wkode-header">
      <div class="wkode-header__nav wkode-header__nav--top">
        <div class="wkode-header__logo-wraper">
					<a class="" href="<?php echo esc_url(site_url()); ?>">
						<img class="logo" src="<?php echo get_theme_file_uri('/assets/img/logo.svg')?>" alt="<?php echo $logo_alt; ?>">
					</a>
				</div>
        <div class="wkode-header__nav" id="navbarNavAltMarkup">
            <ul class="wkode-header__ul">
              <li class="wkode-header__li"> <a href="" class="">home</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Sobre o App</a>  </li>
              <li class="wkode-header__li"> <a href="" class="">Planos</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Contato</a> </li>
              <li class="wkode-header__li"> <a href="" class="">Siga-nos</a> </li>
            </ul>
        </div>
      </div>
      
    </header>