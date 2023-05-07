        <footer class="wkode-footer text-white pt-56 font-montserrat pb-12" id="footer">
          <div class="wkode-footer__main grid grid-cols-1 md:grid-cols-4 container gap-16">
            <div class="wkode-footer__col">
                <h4 class="wkode-footer__title text-4xl font-bold mb-9">
                  Sobre nós
                </h4>
                <p class="wkode-footer__p text-3xl font-semibold mb-9">
                  A Melhor Ferramente para
                  manutenções preventivas em
                  transmissões automáticas
                </p>
                <div class="wkode-hero-section__links grid grid-cols-2">
                  <img class="w-11/12 m-auto ml-0" src="<?php echo get_theme_file_uri('/assets/img/download-apple.svg'); ?>" alt="" >
                  <img class="w-11/12 m-auto ml-0" src="<?php echo get_theme_file_uri('/assets/img/download-google.svg'); ?>" alt="" >
                </div>
            </div>
            <div class="wkode-footer__col">
                <h4 class="wkode-footer__title text-4xl font-bold mb-9">
                  Navegação
                </h4>
                <p class="wkode-footer__p text-3xl font-semibold mb-9">
                  <ul class="wkode-footer__ul text-2xl">
                    <li class="wkode-footer__li"> <a href="" class="">Home</a> </li>
                    <li class="wkode-footer__li"> <a href="" class="">Sobre o App</a>  </li>
                    <li class="wkode-footer__li"> <a href="" class="">Planos</a> </li>
                    <li class="wkode-footer__li"> <a href="" class="">Contato</a> </li>
                    <li class="wkode-footer__li"> <a href="" class="">Siga-nos</a> </li>
                  </ul>
                </p>
            </div>
            <div class="wkode-footer__col">
                <h4 class="wkode-footer__title text-4xl font-bold mb-9">
                  Informações de contato
                </h4>
                <p class="wkode-footer__p text-3xl font-semibold mb-9">
                  <ul class="wkode-footer__ul text-2xl">
                    <li class="wkode-footer__li icons"> 
                      <a href="" class="wkode-footer__a">
                        <img class="" src="<?php echo get_theme_file_uri('/assets/img/pin.svg'); ?>" alt="" >
                        Endereço
                      </a>
                   </li>
                   <li class="wkode-footer__li icons"> 
                      <a href="" class="wkode-footer__a">
                        <img class="" src="<?php echo get_theme_file_uri('/assets/img/whats.svg'); ?>" alt="" >
                        Whatsapp

                      </a>
                    </li>
                    <li class="wkode-footer__li icons"> 
                      <a href="" class="wkode-footer__a">
                        <img class="" src="<?php echo get_theme_file_uri('/assets/img/phone.svg'); ?>" alt="" >
                        Telefone

                      </a>
                    </li>
                  </ul>
                </p>
            </div>
            <div class="wkode-footer__col">
                <h4 class="wkode-footer__title text-4xl font-bold mb-9">
                  Mídias Sociais
                </h4>
                <p class="wkode-footer__p text-3xl font-semibold mb-9">
                  <nav class="wkode-footer__icons-wrapper">
                    <a target="_blank" class="wkode-footer__social-media-icon" href="#" >
                      <img src="<?php echo get_theme_file_uri('/assets/img/footer-insta.svg'); ?>" alt="" class="">
                    </a>
                    <a target="_blank" class="wkode-footer__social-media-icon" href="#" >
                      <img src="<?php echo get_theme_file_uri('/assets/img/footer-facebook.svg'); ?>" alt="" class="">
                    </a>
                    <a target="_blank" class="wkode-footer__social-media-icon" href="#" >
                      <img src="<?php echo get_theme_file_uri('/assets/img/footer-youtube.svg'); ?>" alt="" class="">
                    </a>
                    <a target="_blank" class="wkode-footer__social-media-icon" href="#" >
                      <img src="<?php echo get_theme_file_uri('/assets/img/footer-whats.svg'); ?>" alt="" class="">
                    </a>
                  </nav>
                </p>
            </div>
          </div>
          <div class="wkode-footer__footer grid grid-cols-2 container mt-12">
            <h5 class="text-2xl border-t-2 border-white border-opacity-10 pt-12">Copyright © <?php echo date("Y"); ?> Oli App</h5>
            <a class="border-t-2 border-white border-opacity-10 pt-12" target="_blank" href="<?php echo esc_url('https://wkode.com.br/'); ?>">
                <img class="w-40 md:w-60 m-auto mr-0 h-auto" src="<?php echo get_theme_file_uri('./assets/img/logo-footer.svg')?>" alt="">
            </a>
          </div>

          
          <img class="wkode-footer__bg-image-mob" src="<?php echo get_theme_file_uri('/assets/img/bg-footer-mob.png'); ?>" >
          <img class="wkode-footer__bg-image" src="<?php echo get_theme_file_uri('/assets/img/bg-footer.png'); ?>" >
        </footer>
      <?php wp_footer() ?>

    </div>
  </body>
</html>