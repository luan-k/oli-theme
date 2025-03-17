<?php get_header();?>

<section class="wkode-hero-section relative text-black pt-32 md:pt-80 md:pt-40 font-montserrat pb-12 md:pb-0" id="hero">
    <div class="wkode-hero-section__wrapper grid grid-cols-1 md:grid-cols-7 h-full container">
        <div class="wkode-hero-section__call-to-action p-6 md:p-0 md:pr-9 mb-36 md:mb-0 col-span-3">
            <img class="h-28 w-fit mb-5 md:block hidden" src="<?php echo get_theme_file_uri('/assets/img/oli-colored.svg'); ?>" alt="Ori" >
            <h1 class="wkode-hero-section__main-title">
                <span data-entrance="from-left" class=" text-6xl mb-7 font-bold  block">
                    A melhor <span class="text-oli-primary-orange">ferramenta</span> de suporte para <span class="text-oli-primary-orange">manutenções preventivas</span> veiculares.
                </span>
            </h1>
            <h2 class="text-3xl mb-2 wkode-hero-section__description" data-entrance="from-left">
                Tenha em mãos todas as informações
                necessárias para a manutenção preventiva
                de <span class="text-oli-primary-orange font-bold">motor, arrefecimento, transmissões automáticas, sistemas anexos</span> e muito mais.
            </h2>
            <p class="text-3xl mb-20 wkode-hero-section__description" data-entrance="from-left">
                Mais de <span class="text-oli-primary-orange font-bold">3.000</span> procedimentos detalhados em
                texto e vídeo para otimizar seu serviço e
                aumentar o faturamento.
            </p>
            <div class="flex flex-col items-center justify-center mb-4">
                <p class="text-sm">
                Clique e descubra o melhor plano para o seu negócio.
                </p>
                <a href="#planos" class="main-cta text-3xl md:text-5xl">Escolha Seu plano</a>
            </div>
            <div class="flex gap-2 items-center justify-center" data-entrance="from-left">
                <a class="w-fit h-fit" href="https://apps.apple.com/br/app/oli/id6451156427" target="_blank">
                    <img class="w-44 md:w-56" src="<?php echo get_theme_file_uri('/assets/img/download-apple.png'); ?>" alt="" >
                </a>
                <a class="w-fit h-fit" href="https://play.google.com/store/apps/details?id=com.gebit.oliapp&hl=pt_BR&gl=US&pli=1" target="_blank">
                    <img class="w-44 md:w-56" src="<?php echo get_theme_file_uri('/assets/img/download-google.png'); ?>" alt="" >
                </a>
            </div>
        </div>
    </div>

    <div class="wkode-hero-section__image" data-entrance="from-right">
        <img class="hero-image" src="<?php echo get_theme_file_uri('/assets/img/phone.png'); ?>" alt="" >
    </div>
    <!-- <img class="wkode-hero-section__bg-image" src="<?php echo get_theme_file_uri('/assets/img/hero-bg.png'); ?>" >
    <img class="wkode-hero-section__bg-image-mob" src="<?php echo get_theme_file_uri('/assets/img/hero-bg-mobile.png'); ?>" > -->
</section>

<section class="wkode-section-divider">
    <img class="h-auto w-full" src="<?php echo get_theme_file_uri('/assets/img/section-divider.svg'); ?>" alt="">
</section>

<section class="wkode-numbers py-32" id="my-counter" >
    <div class="wkode-numbers__wrapper grid grid-cols-1 md:grid-cols-3 container gap-9">
        <div class="wkode-numbers__card mb-20 md:mb-0">
            <div class="wkode-numbers__icon mb-7">
                <img data-entrance="from-top-left" class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-youtube.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 data-entrance="from-left" class="timer text-7xl font-black" data-to="3000" data-speed="3000"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 data-entrance="from-bottom-left" class="wkode-numbers__text--header text-4xl font-bold text-center">
                    Procedimentos em videos
                </h3>
            </div>
        </div>
        <div class="wkode-numbers__card mb-20 md:mb-0" >
            <div class="wkode-numbers__icon mb-7">
                <img data-entrance="from-top" class="wkode-numbers__icon-image" src="<?php echo get_theme_file_uri('/assets/img/numbers-car.png'); ?>" >
            </div>
            <div class="wkode-numbers__number text-center mb-7">
                <h2 data-entrance="fade" class="timer text-7xl font-black" data-to="6300" data-speed="3000"></h2>
            </div>
            <div class="wkode-numbers__text">
                <h3 data-entrance="from-bottom" class="wkode-numbers__text--header text-4xl font-bold text-center">
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
                <h3 data-entrance="from-bottom-right" class="wkode-numbers__text--header text-4xl font-bold text-center">
                    Manuais técnicos
                </h3>
            </div>
        </div>
    </div>
</section>

<section class="wkode-planos flex flex-col gap-12 items-center justify-center py-32" id="planos">
    <h2 class="text-6xl mt-32 mb-40 font-bold">PLANOS E ACESSOS</h2>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Transmissão Automática com Máquina</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso às aplicações de transmissão Automática com <b>Máquina</b>, com vídeos tutoriais</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Suporte ilimitado</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a material técnico exclusivo mensalmente</p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Transmissão Automática Manual</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso às aplicações de transmissão Automática com <b>Máquina</b>, com vídeos tutoriais</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Suporte ilimitado</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a material técnico exclusivo mensalmente</p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Sistemas Anexos</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso às aplicações de Sistemas Anexos (Haldex, 4x4, Diferenciais), com vídeos tutoriais</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Suporte ilimitado</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a material técnico exclusivo mensalmente</p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Motor e complementos 
        <span class="text-oli-primary-orange">(Módulo Novo)</span>
        </h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso às aplicações de motor, filtros, fluidos de freio, arrefecimento, direção hidráulica e diferenciais.</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a material técnico exclusivo mensalmente</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-7 mx-8" src="<?php echo get_theme_file_uri('/assets/img/dont.png'); ?>" alt="X">
                <p><b>Sem vídeos tutoriais</b></p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-7 mx-8" src="<?php echo get_theme_file_uri('/assets/img/dont.png'); ?>" alt="X">
                <p><b>Sem suporte técnico</b></p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Consultas</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a todas às aplicações do App (Transmissão, Sistemas Anexos, Motor), sem vídeos tutoriais</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-7 mx-8" src="<?php echo get_theme_file_uri('/assets/img/dont.png'); ?>" alt="X">
                <p><b>Sem vídeos tutoriais</b></p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-7 mx-8" src="<?php echo get_theme_file_uri('/assets/img/dont.png'); ?>" alt="X">
                <p><b>Sem suporte técnico</b></p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Central de Ofinina Premium</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a todas às aplicações do App (Transmissão, Sistemas Anexos, Motor), com vídeos tutoriais</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Suporte ilimitado</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Descontos e condições para cursos com parceiros OLI</p>
            </div>
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <img class="w-11 mx-6" src="<?php echo get_theme_file_uri('/assets/img/check.png'); ?>" alt="Check">
                <p>Acesso a material técnico exclusivo mensalmente</p>
            </div>
        </div>
    </div>
    <div class="wkode-planos__item flex flex-col items-center justify-center gap-6 w-5/6">
        <h4 class="wkode-planos__item_title text-4xl font-bold italic py-8 px-12 w-full text-center">Procedimento Avulso</h4>
        <div class="wkode-planos__item_content w-full py-8 px-4">
            <div class="wkode-planos__item_content-item flex gap-3 items-center text-2xl">
                <p>
                    Contratação avulsa de procedimento,
                    na qual se escolhe um modelo de veiculo, que terá todas as informações
                    (transmissão, sistema anexo, motor) com <b>vídeo tutorial disponível por 15 dias.</b>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="wkode-technical container py-40 flex flex-col items-center justify-center gap-12">
    <div class="title-wrapper w-11/12">
        <h2 class="w-full text-oli-primary-orange text-5xl md:text-6xl font-bold mb-6">Tenha Acesso a Informações Técnicas
        Essenciais para o Sucesso do Seu Negócio!</h2>
        <h3 class="w-full text-4xl md:text-5xl mb-24">Para oferecer o suporte que seu negócio precisa e merece, a OLI
        disponibiliza diversas informações técnicas, acessíveis conforme o plano escolhido.</h3>
    </div>
    <div class="modules-wrapper flex flex-col items-center justify-center gap-12 mb-24 w-11/12">
        <h4 class="text-5xl md:text-center md:text-3xl font-bold px-12 md:px-0">
            <span class="text-oli-primary-orange">Módulos: </span>
            Transmissões Automáticas e sistemas anexos
        </h4>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Procedimentos em vídeo com o passo a passo para a manutenção preventiva de transmissões automáticas e sistemas anexos, com ou sem o uso de máquina.
            </div>
        </div>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Indicação de fluidos, filtros (interno, externo e/ou Carter) e aditivos de limpeza.
            </div>
        </div>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Dicas técnicas sobre transmissões e sistemas anexos, contendo dados como histórico de problemas crônicos, cuidados indispensáveis, códigos de erro e outras informações.
            </div>
        </div>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Suporte técnico especializado em tempo real, sem IA ou bots, com profissionais capacitados para atender sua demanda e encontrar a melhor solução para a manutenção preventiva dos seus clientes.
            </div>
        </div>
    </div>
    <div class="modules-wrapper flex flex-col items-center justify-center gap-12 w-11/12">
        <h4 class="text-5xl md:text-center md:text-3xl font-bold px-12 md:px-0">
            <span class="text-oli-primary-orange">Módulos: </span>
            Central de Motores e Sistemas Correlatos
        </h4>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Aqui, reunimos todas as informações sobre manutenção preventiva do motor e sistemas correlatos para agilizar a emissão de orçamentos, a compra de produtos e o estudo técnico.
            </div>
        </div>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Informações sobre fluidos de motor, com viscosidade, quantidade por modelo, marcas que podem ser utilizadas etc.
            </div>
        </div>
        <div class="oli-module px-8 py-8 flex items-center gap-12 rounded-full text-3xl">
            <img class="w-16 h-auto" src="<?php echo get_theme_file_uri('/assets/img/oli-white.svg'); ?>" alt="Oli">
            <div class="oli-module__text font-bold">
            Informações sobre filtros de ar, cabine, fluido de freio, arrefecimento e diferenciais.
            </div>
        </div>
    </div>
    
</section>

<section class="wkode-icons py-40 px-20">
    <h2 class="wkode-icon-title text-oli-primary-orange">Conheça as funcionalidades do OliApp</h2>
    <div class="container grid grid-cols-1 md:grid-cols-4 gap-12 ">
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/procedimentos.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Procedimentos
            </h3>
            <p class="text-2xl text-center">
                Passo a passo detalhado para cada manutenção
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/tutoriais.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Tutoriais
            </h3>
            <p class="text-2xl text-center">
                Vídeos e instruções
                visuais com descritivo
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/tecnologia.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Tecnologia
            </h3>
            <p class="text-2xl text-center">
                Ferramenta inteligente que aceleram diagnósticos, otimizando o desempenho da oficina.
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/inovacao.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Inovação
            </h3>
            <p class="text-2xl text-center">
                Metodologias modernas para transformar processos
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/atualizacoes.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Atualizações
            </h3>
            <p class="text-2xl text-center">
                Receba melhorias constantes
                e novas
                funcionalidades
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/resultados.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Resultados
            </h3>
            <p class="text-2xl text-center">
                Aumento da eficiência e
                redução de custos
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/suporte.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Suporte
            </h3>
            <p class="text-2xl text-center">
                Atendimento especializado para tirar dúvidas e oferecer orientações em tempo real, sempre que necessário.
            </p>
        </div>
        <div class="wkode-icon">
            <img src="<?php echo get_theme_file_uri('/assets/img/eficiencia.svg'); ?>" >
            <h3 class="wkode-icon-text text-center">
                Eficiência
            </h3>
            <p class="text-2xl text-center">
                Reduza retrabalhos e
                maximize o tempo da sua equipe
            </p>
        </div>
    </div>
</section>

<section class="testimonial-section my-48">
    
    <div class="testimonial-carousel">
    <div class="testimonial-wrapper ">
        <div class="testimonial-wrapper-wrapper font-montserrat">
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/mecanica.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "O aplicativo é show de bola, ele é bem detalhado, com informações bem claras, passa tudo muito certinho, é um aplicativo 100%"
                </p>
                <h4 class="text-black text-4xl font-semibold">Mecanica automotiva</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/alberto.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "O app oli facilitou demais nossa atuação e agilizou todo atendimento e serviço que oferecemos, já que cada procedimento é super bem detalhado e simples de encontrar. Pelo modelo do carro e o tipo de serviço, tudo aparece rápido e fácil de entender. É sensacional."
                </p>
                <h4 class="text-black text-4xl font-semibold">Alberto Fernandes Silva</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/paulo.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "O aplicativo é top e ajuda muito no dia a dia da oficina. Além de tudo, ainda tem suporte para tirar dúvidas e ajudar nos procedimentos. Sensacional"
                </p>
                <h4 class="text-black text-4xl font-semibold">Paulo Ribeiro Souza</h4>
            </div>
            <div class="testimonial text-black text-center px-20">
                <img class="testimonial-image rounded-full m-auto w-48 mb-12" src="<?php echo get_theme_file_uri('/assets/img/renato.jpg'); ?>" >
                <p class="testimonial-text text-black text-3xl font-medium mb-12">
                    "Sendo bem franco, pense em um negócio TOP. Minha irmã baixou o app no tablet da oficina, entra ali e já acessa a especificação do óleo, a quantidade, se tem filtro, não precisa ficar perguntando toda hora. Só nessa pegada dela fazer tudo sem me ligar, a gente ganhou milheiros. Fora os procedimentos, facilita e auxilia o reparador mecânico um monte. Parabéns a toda equipe, vocês são TOP, esse aplicativo é revolucionário"
                </p>
                <h4 class="text-black text-4xl font-semibold">Renato Geths </h4>
            </div>
        </div>
        
    </div>
    <button id="prevBtn" class="prev">&lt;</button>
    <button id="nextBtn" class="next">&gt;</button>
    </div>
</section>

<section class="wkode-contact font-montserrat pt-32 pb-96" id="contato" style="background-image: url(<?php echo get_theme_file_uri('/assets/img/contact-bg-dark.jpg'); ?>)">
    <div class="wkode-contact__wrapper container">
        <h3 class="text-center text-5xl font-bold text-white mb-12">Fale Conosco!</h3>
        <?php echo do_shortcode( '[wpforms id="15" title="false" description="false"]' ) ?>
    </div>
</section>

<div class="wkode-single-used-bikes-template__form modal" id="myModal">
    <h2 class="wkode-single-used-bikes-template__form-title">
        PRÉ-CADASTRO - PLANOS OLI APP
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="26" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                Olá, tudo bem! Vamos te ajudar! Preencha seu pré cadastro para que possamos orientar você na escolha do melhor plano Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal2">
    <h2 class="wkode-single-used-bikes-template__form-title">
        SEJA NOSSO REPRESENTANTE
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="27" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                SEJA NOSSO REPRESENTANTE!
                A OliApp está bucando sempre
                ampliar a rede de colaboradores
                e carteira de clientes! amos juntos!
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal3">
    <h2 class="wkode-single-used-bikes-template__form-title">
        SEJA NOSSO ANUNCIANTE
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="28" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                SEJA NOSSO ANUNCIANTE! No OliApp você pode dar visibilidade à sua marca para um público super qualificado e aumentar sua receita.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal4">
    <h2 class="wkode-single-used-bikes-template__form-title">
        SEJA NOSSO PARCEIRO COMERCIAL
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="27" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                SEJA NOSSO PARCEIRO COMERCIAL
                No OliApp sua empresa tem visibilidade
                na nossa rede de contatos. Vamos
                juntos divulgar sesu serviços com Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal5">
    <h2 class="wkode-single-used-bikes-template__form-title">
        PRÉ-CADASTRO - PLANOS OLI APP
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="26" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                Olá, tudo bem! Vamos te ajudar! Preencha seu pré cadastro para que possamos orientar você na escolha do melhor plano Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal6">
    <h2 class="wkode-single-used-bikes-template__form-title">
        PRÉ-CADASTRO - PLANOS OLI APP
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="26" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                Olá, tudo bem! Vamos te ajudar! Preencha seu pré cadastro para que possamos orientar você na escolha do melhor plano Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<div class="wkode-single-used-bikes-template__form modal" id="myModal7">
    <h2 class="wkode-single-used-bikes-template__form-title">
        PRÉ-CADASTRO - PLANOS OLI APP
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="26" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                Olá, tudo bem! Vamos te ajudar! Preencha seu pré cadastro para que possamos orientar você na escolha do melhor plano Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>
<div class="wkode-single-used-bikes-template__form modal" id="myModal8">
    <h2 class="wkode-single-used-bikes-template__form-title">
        PRÉ-CADASTRO - PLANOS OLI APP
        <span class="close">
            <img class="wkode-single-used-bikes__img" src="<?php echo get_theme_file_uri('/assets/img/white-x-thick.svg'); ?>" alt="" srcset="">
        </span>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-5 p-12 md:p-28 md:gap-24">
        <div class="wkode-form md:col-span-3">
            <?php echo do_shortcode( '[wpforms id="26" title="false"]' ); ?>
        </div>
        <div class="wkode-svg-wrapper md:col-span-2">
            <p class="wkode-form-text mb-7">
                Olá, tudo bem! Vamos te ajudar! Preencha seu pré cadastro para que possamos orientar você na escolha do melhor plano Oli.
            </p>
            <img class="w-60 md:w-full m-auto  md:mb-auto" src="<?php echo get_theme_file_uri('/assets/img/form-oli.svg'); ?>" alt="" >
        </div>
    </div>
     <img class="wkode-circle-hero" src="<?php echo get_theme_file_uri('/assets/img/circle.png'); ?>" >
</div>

<?php get_footer(); ?>
