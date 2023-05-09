<?php get_header();?>

<section class="wkode-hero-section text-white pt-60 md:pt-40 font-montserrat " id="hero">
    <div class="wkode-hero-section__wrapper grid grid-cols-1 md:grid-cols-2 h-full container">
        <div class="wkode-hero-section__call-to-action p-0 md:pr-9 mb-36 md:mb-0">
            <h1 class="wkode-hero-section__main-title">
                <span data-entrance="from-top" class="text-4xl mb-4 font-thin text-oli-secondary-blue block">Esse App é para você!</span>
                <span data-entrance="from-top-left" class="text-5xl mb-3 font-medium block">Descomplique a Manutenção <br> Preventiva em</span>
                <span data-entrance="from-left" class=" text-6xl mb-7 font-bold text-oli-primary-orange block"><span class="wkode-hero-section__main-title--call">Transmissões Automáticas</span> <span class="wkode-hero-section__main-title--call">e Sistemas 4X4</span> </span>
            </h1>
            <h2 class="text-3xl mb-20 wkode-hero-section__description" data-entrance="from-left">
                Tenha acesso a milhares de procedimentos em vídeo e texto, acelerando sua gestão de compras, orçamentos e aumentando a rentabilidade do seu negócio.
            </h2>
            <div class="wkode-hero-section__links grid grid-cols-2" data-entrance="from-left">
                <img class="w-56 md:w-72 m-auto mr-7" src="<?php echo get_theme_file_uri('/assets/img/download-apple.svg'); ?>" alt="" >
                <img class="w-56 md:w-72 m-auto ml-7" src="<?php echo get_theme_file_uri('/assets/img/download-google.svg'); ?>" alt="" >
            </div>
        </div>
        <div class="wkode-hero-section__image" data-entrance="from-right">
            <img class="" src="<?php echo get_theme_file_uri('/assets/img/hero-phone.png'); ?>" alt="" >
        </div>
    </div>
    <img class="wkode-hero-section__bg-image" src="<?php echo get_theme_file_uri('/assets/img/hero-bg.png'); ?>" >
    <img class="wkode-hero-section__bg-image-mob" src="<?php echo get_theme_file_uri('/assets/img/hero-bg-mobile.png'); ?>" >
</section>

<section class="wkode-about-us pt-96 mt-36 md:pt-80 font-montserrat" id="sobre">
    <div class="wkode-about-us__wrapper container">
        <div class="wkode-about-us__logo text-center" data-entrance="from-bottom">
            <img class="m-auto w-60" src="<?php echo get_theme_file_uri('/assets/img/logo-dark.svg')?>" >
        </div>
       
        <div class="wkode-about-us__wrapper grid grid-cols-1 md:grid-cols-2 mt-28">
            
            <div data-entrance="from-left" class="wkode-about-us__text font-medium text-oli-primary-blue text-3xl px-12 mt-16 pb-12">
                <p class="wkode-about-us__text--p mb-12">
                    A OLI é uma plataforma de suporte técnico para manutenção preventiva de transmissões
                    automáticas veiculares, disponibilizando ampla base de informações para que aplicadores
                    possam realizar troca de fluidos, substituição de filtros, aplicação de aditivos e outros
                    processos necessários aos cuidados para com o veículo.
                </p>

                <div class="wkode-about-us__text--list-wrapper">
                    
                    Dentre as inúmeras funcionalidades da plataforma, a OLI oferece:
                    <ul>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Indicação do fluído e sua respectiva norma de aplicação;</p>
                        </li>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Indicação de aditivos de limpeza, conversão, proteção e outras finalidades;</p>
                        </li>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Indicação do filtro interno, externo e/ou Carter;</p>
                        </li>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Km ideal para realização de manutenção;</p>
                        </li>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Tempo de serviço necessário para realização do procedimento;</p>
                        </li>
                        <li>
                            <img class="" src="<?php echo get_theme_file_uri('/assets/img/mini-logo.png')?>" >
                            <p>Todas as informações acima de forma quantitativas e qualitativas, com passo
                            a passo em vídeo e quadro descritivo em texto, seja para realização do procedimento de forma manual ou com máquina.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wkode-about-us__image wkode-about-us__main-image">
                <img data-entrance="from-right" class="m-auto px-20 w-full" src="<?php echo get_theme_file_uri('/assets/img/about-us-side-2.png'); ?>" alt="" >
            </div>
        </div>
    </div>
    <img class="wkode-about-us__bg-image" src="<?php echo get_theme_file_uri('/assets/img/about-us-bg.png'); ?>" >
</section>

<section class="wkode-numbers py-24" id="my-counter" >
    <div class="wkode-numbers__wrapper text-white grid grid-cols-1 md:grid-cols-3 container gap-9">
        <div class="wkode-numbers__card mb-20 md:mb-0">
            <div class="wkode-numbers__icon mb-7">
                <img data-entrance="from-top-left" class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-youtube.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 data-entrance="from-left" class="timer text-7xl font-black" data-to="2193" data-speed="3000"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 data-entrance="from-bottom-left" class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Procedimentos em videos
                </h3>
            </div>
        </div>
        <div class="wkode-numbers__card mb-20 md:mb-0" >
            <div class="wkode-numbers__icon mb-7">
                <img data-entrance="from-top" class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-car.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 data-entrance="fade" class="timer text-7xl font-black" data-to="1200" data-speed="3000"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 data-entrance="from-bottom" class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Modelos de veículos
                </h3>
            </div>
        </div>
        <div class="wkode-numbers__card ">
            <div class="wkode-numbers__icon mb-7">
                <img data-entrance="from-top-right" class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-phone.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 data-entrance="from-right" class="timer text-7xl font-black" data-to="1109" data-speed="3000"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 data-entrance="from-bottom-right" class="wkode-numbers__text--header text-5xl font-bold text-center tracking-wider">
                    Manuais técnicos
                </h3>
            </div>
        </div>
    </div>
    <img class="wkode-numbers__bg-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-bg.png'); ?>" >
</section>


<section class="wkode-carousel font-montserrat" id="planos" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/cards-bg-60.png'); ?>)">
  <button class="wkode-carousel__arrow wkode-carousel__arrow_prev">&#8249;</button>
  <button class="wkode-carousel__arrow wkode-carousel__arrow_next">&#8250;</button>
  <ul data-entrance="from-bottom" class="wkode-carousel__list">
    <li class="wkode-carousel__item" data-pos="-2">
        <div class="wkode-carousel__header w-full text-center pt-16">
            <h4 class="wkode-carousel__header-title text-5xl mb-7 font-medium">BASIC</h4>
            <h3 class="wkode-carousel__header-price text-7xl font-black tracking-widest text-white">R$ 79,90</h3>
            <img class="wkode-carousel__header-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-header.png'); ?>" >
        </div>
        <div class="wkode-carousel__body text-black text-center px-6 py-9">
            <p class="wkode-carousel__description text-3xl">
                Plano inicial para empresas que querem iniciar
                a jornada de serviços em transmissões automáticas.
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl px-9">
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a todas as montadoras e modelos de veículos
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a procedimentos de forma manual
                    </div>
                </li>
                <li class="wkode-carousel__list-item wkode-carousel__list-item--unchecked">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/uncheckmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">                
                        Acesso a procedimentos com máquina
                    </div>
                </li>
                <li class="wkode-carousel__list-item wkode-carousel__list-item--unchecked">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/uncheckmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a 05 Assistências Online mensais para dúvidas técnicas
                    </div>
                </li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full pb-16">
            <a href="" class="wkode-carousel__footer-main-btn wkode-btn--solid-main-red text-4xl">Assine já</a>
            <img class="wkode-carousel__footer-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-footer.png'); ?>" >
        </div>
    </li>
    <li class="wkode-carousel__item" data-pos="-1">
        <div class="wkode-carousel__header w-full text-center pt-16">
            <h4 class="wkode-carousel__header-title text-5xl mb-7 font-medium">PREMIUM</h4>
            <h3 class="wkode-carousel__header-price text-7xl font-black tracking-widest text-white">R$ 174,90</h3>
            <img class="wkode-carousel__header-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-header.png'); ?>" >
        </div>
        <div class="wkode-carousel__body text-black text-center px-6 py-9">
            <p class="wkode-carousel__description text-3xl">
                Plano completo com todas as funcionalidades
                que a plataforma tem a oferecer, exceto assistências.
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl px-9">
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a todas as montadoras e modelos de veículos
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a procedimentos de forma manual
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">                
                        Acesso a procedimentos com máquina
                    </div>
                </li>
                <li class="wkode-carousel__list-item wkode-carousel__list-item--unchecked">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/uncheckmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a 05 Assistências Online mensais para dúvidas técnicas
                    </div>
                </li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full pb-16">
            <a href="" class="wkode-carousel__footer-main-btn wkode-btn--solid-main-red text-4xl">Assine já</a>
            <img class="wkode-carousel__footer-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-footer.png'); ?>" >
        </div>
    </li>
    <li class="wkode-carousel__item" data-pos="0">
        <div class="wkode-carousel__header w-full text-center pt-16">
            <h4 class="wkode-carousel__header-title text-5xl mb-7 font-medium">PREMIUM PLUS</h4>
            <h3 class="wkode-carousel__header-price text-7xl font-black tracking-widest text-white">R$ 299,90</h3>
            <img class="wkode-carousel__header-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-header.png'); ?>" >
        </div>
        <div class="wkode-carousel__body text-black text-center px-6 py-9">
            <p class="wkode-carousel__description text-3xl">
                Plano completo com todas as funcionalidades que a plataforma tem a oferecer.
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl px-9">
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a todas as montadoras e modelos de veículos
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a procedimentos de forma manual
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">                
                        Acesso a procedimentos com máquina
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a 05 Assistências Online mensais para dúvidas técnicas
                    </div>
                </li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full pb-16">
            <a href="" class="wkode-carousel__footer-main-btn wkode-btn--solid-main-red text-4xl">Assine já</a>
            <img class="wkode-carousel__footer-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-footer.png'); ?>" >
        </div>
    </li>
    <li class="wkode-carousel__item wkode-carousel__item--personal" data-pos="1">
        <div class="wkode-carousel__header w-full text-center pt-16">
            <h4 class="wkode-carousel__header-title text-5xl mb-7 font-medium">PERSONAL</h4>
            <h3 class="wkode-carousel__header-price text-7xl font-black tracking-widest text-white">R$ 129,90</h3>
            <img class="wkode-carousel__header-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-header-red.png'); ?>" >
        </div>
        <div class="wkode-carousel__body text-black text-center px-6 py-9">
            <p class="wkode-carousel__description text-3xl">
                Plano com todas as funcionalidades que a plataforma
                tem a oferecer, limitado por montadoras, focado nos
                especialistas em marcas, sem assistência.
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl px-9">
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a todas as montadoras e modelos de veículos
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a procedimentos de forma manual
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">                
                        Acesso a procedimentos com máquina
                    </div>
                </li>
                <li class="wkode-carousel__list-item wkode-carousel__list-item--unchecked">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/uncheckmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a 05 Assistências Online mensais para dúvidas técnicas
                    </div>
                </li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full pb-16">
            <a href="" class="wkode-carousel__footer-main-btn wkode-btn--solid-main-red text-4xl">Assine já</a>
            <img class="wkode-carousel__footer-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-footer-red.png'); ?>" >
        </div>
    </li>
    <li class="wkode-carousel__item" data-pos="2">
        <div class="wkode-carousel__header w-full text-center pt-16">
            <h4 class="wkode-carousel__header-title text-5xl mb-7 font-medium">PERSONAL PLUS</h4>
            <h3 class="wkode-carousel__header-price text-7xl font-black tracking-widest text-white">R$ 219,90</h3>
            <img class="wkode-carousel__header-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-header.png'); ?>" >
        </div>
        <div class="wkode-carousel__body text-black text-center px-6 py-9">
            <p class="wkode-carousel__description text-3xl">
                Plano com todas as funcionalidades que a plataforma
                tem a oferecer, limitado por montadoras, focado nos
                especialistas em marcas.
            </p>
            <ul class="wkode-carousel__list-wrapper text-4xl px-9">
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a todas as montadoras e modelos de veículos
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a procedimentos de forma manual
                    </div>
                </li>
                <li class="wkode-carousel__list-item">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">                
                        Acesso a procedimentos com máquina
                    </div>
                </li>
                <li class="wkode-carousel__list-item ">
                    <img class="wkode-carousel__list-item-image" src="<?php echo get_theme_file_uri('/assets/img/checkmark.svg'); ?>" >
                    <div class="wkode-carousel__list-item-text">
                        Acesso a 05 Assistências Online mensais para dúvidas técnicas
                    </div>
                </li>
            </ul>
        </div>
        <div class="wkode-carousel__footer w-full pb-16">
            <a href="" class="wkode-carousel__footer-main-btn wkode-btn--solid-main-red text-4xl">Assine já</a>
            <img class="wkode-carousel__footer-bg-image" src="<?php echo get_theme_file_uri('/assets/img/card-footer.png'); ?>" >
        </div>
    </li>
  </ul>
</section>

<section data-entrance="from-bottom" class="testimonial-section my-48">
    
    <div class="testimonial-carousel">
    <div class="testimonial-wrapper ">
        <div class="testimonial-wrapper-wrapper font-montserrat">
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/BECKER-OFICINA.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "Incríveis os vídeos e o suporte dos caras, já se pagou no primeiro cliente!"
                </p>
                <h4 class="text-black text-4xl font-semibold">Becker Oficina</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/CARLOS.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "Recebi a indicação de um amigo profissional e já aprendi muito. Parabéns pela qualidade dos vídeos e manuais."
                </p>
                <h4 class="text-black text-4xl font-semibold">Carlos Costa Ribeiro</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/SUPERNOVA.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "Equipe muito bem treinada e capacitada. Atendimento top! Não tem nenhum problema que eles deixem sem solução."
                </p>
                <h4 class="text-black text-4xl font-semibold">SuperNova Auto Center</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/GUILHERME.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "O app é excelente, ajudou-me bastante e fez toda a diferença na oficina."
                </p>
                <h4 class="text-black text-4xl font-semibold">Guilherme Botelho</h4>
            </div>
        </div>
        
    </div>
    <button id="prevBtn" class="prev">&lt;</button>
    <button id="nextBtn" class="next">&gt;</button>
    </div>
</section>

<section class="wkode-contact font-montserrat pt-32 pb-96" id="contato" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/contact-bg-dark.jpg'); ?>)">
    <div data-entrance="fade" class="wkode-contact__wrapper container">
        <h3 class="text-center text-5xl font-bold text-white mb-12">Fale Conosco!</h3>
        <?php echo do_shortcode( '[wpforms id="15" title="false" description="false"]' ) ?>
    </div>
</section>


<?php get_footer(); ?>
