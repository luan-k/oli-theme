<?php get_header();?>

<section class="wkode-hero-section text-white pt-60 md:pt-40 font-montserrat " >
    <div class="wkode-hero-section__wrapper grid grid-cols-1 md:grid-cols-2 h-full container">
        <div class="wkode-hero-section__call-to-action p-0 md:pr-9 mb-36 md:mb-0">
            <h1 class="wkode-hero-section__main-title">
                <span class="text-4xl mb-4 font-thin text-oli-secondary-blue block">Esse App é para você!</span>
                <span class="text-5xl mb-3 font-medium block">Descomplique a Manutenção <br> Preventiva em:</span>
                <span class="text-6xl mb-7 font-bold text-oli-primary-orange block">Transmissões Automáticas.</span>
            </h1>
            <h2 class="text-3xl mb-20 wkode-hero-section__description">
                Tenha acesso a milhares de
                procedimento em vídeo e aumente a
                rentabilidade do seu negócioe tecnologia.
            </h2>
            <div class="wkode-hero-section__links grid grid-cols-2">
                <img class="w-56 md:w-72 m-auto mr-7" src="<?php echo get_theme_file_uri('/assets/img/download-apple.svg'); ?>" alt="" >
                <img class="w-56 md:w-72 m-auto ml-7" src="<?php echo get_theme_file_uri('/assets/img/download-google.svg'); ?>" alt="" >
            </div>
        </div>
        <div class="wkode-hero-section__image">
            <img class="" src="<?php echo get_theme_file_uri('/assets/img/hero-phone.png'); ?>" alt="" >
        </div>
    </div>
    <img class="wkode-hero-section__bg-image" src="<?php echo get_theme_file_uri('/assets/img/hero-bg.png'); ?>" >
    <img class="wkode-hero-section__bg-image-mob" src="<?php echo get_theme_file_uri('/assets/img/hero-bg-mobile.png'); ?>" >
</section>

<section class="wkode-about-us pt-96 mt-36 md:pt-80 font-montserrat">
    <div class="wkode-about-us__wrapper container">
        <div class="wkode-about-us__logo text-center">
            <img class="m-auto w-60" src="<?php echo get_theme_file_uri('/assets/img/logo-dark.svg')?>" >
        </div>
        <h3 class="wkode-about-us__text font-bold text-oli-primary-blue text-4xl px-12 mt-16">
            A OLI é uma plataforma de suporte técnico para manutenção preventiva de transmissões
            automáticas veiculares, disponibilizando ampla base de informações para que aplicadores
            possam realizar troca de fluidos, substituição de filtros, aplicação de aditivos e outros
            processos necessários aos cuidados para com o veículo.
        </h3>
        <div class="wkode-about-us__wrapper grid grid-cols-1 sm:grid-cols-2 mt-28">
            <div class="wkode-about-us__main-image p-0 md:pr-9 mb-60 md:mb-0">
                <img class="w-8/12 m-auto" src="<?php echo get_theme_file_uri('/assets/img/about-us-main.png'); ?>" alt="" >
            </div>
            <div class="wkode-about-us__image wkode-about-us__main-image">
                <img class="m-auto px-20 w-full" src="<?php echo get_theme_file_uri('/assets/img/about-us-side-2.png'); ?>" alt="" >
            </div>
        </div>
    </div>
    <img class="wkode-about-us__bg-image" src="<?php echo get_theme_file_uri('/assets/img/about-us-bg.png'); ?>" >
</section>

<section class="wkode-numbers py-24">
    <div class="wkode-numbers__wrapper text-white grid grid-cols-1 md:grid-cols-3 container gap-9">
        <div class="wkode-numbers__card mb-20 md:mb-0">
            <div class="wkode-numbers__icon mb-12">
                <img class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-youtube.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 class="timer text-7xl font-black" data-to="2193" data-speed="1500"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Procedimentos em videos
                </h3>
            </div>
        </div>
        <div class="wkode-numbers__card mb-20 md:mb-0">
            <div class="wkode-numbers__icon mb-12">
                <img class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-car.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 class="timer text-7xl font-black" data-to="1200" data-speed="1500"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Modelos de veículos
                </h3>
            </div>
        </div>
        <div class="wkode-numbers__card ">
            <div class="wkode-numbers__icon mb-12">
                <img class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-phone.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 class="timer text-7xl font-black" data-to="1109" data-speed="1500"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Manuais técnicos
                </h3>
            </div>
        </div>
    </div>
    <img class="wkode-numbers__bg-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-bg.png'); ?>" >
</section>

<!-- <?php /* echo the_content(); */ ?> -->

<div class="wkode-carousel">
  <ul class="wkode-carousel__list">
    <li class="wkode-carousel__item" data-pos="-2">1</li>
    <li class="wkode-carousel__item" data-pos="-1">2</li>
    <li class="wkode-carousel__item text-center" data-pos="0">
        <div class="wkode-carousel__header w-full">
            <h4 class="wkode-carousel__title text-5xl">Básico</h4>
            <h3 class="wkode-carousel__price text-7xl">R$ 99,00</h3>
        </div>
        <div class="wkode-carousel__body">
            <p class="wkode-carousel__description text-3xl">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl">
                <li class="wkode-carousel__list-item">Lorem Ipsum</li>
                <li class="wkode-carousel__list-item">Lorem Ipsum</li>
                <li class="wkode-carousel__list-item">Lorem Ipsum</li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full">
            <a href="" class="wkode-carousel__main-btn text-4xl">Assine já</a>
        </div>
    </li>
    <li class="wkode-carousel__item" data-pos="1">4</li>
    <li class="wkode-carousel__item" data-pos="2">5</li>
  </ul>
</div>

<?php get_footer(); ?>
