<footer class="footer footer_type_2">
    <div class="footer-middle container">
      <div class="row row-cols-lg-5 row-cols-2">
        <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
          <div class="logo">
            <a href="{{ route('home.index') }}">
              <img src="{{ asset('assets/images/logo.png') }}" alt="PalpiteNaCamara" class="logo__image d-block" />
            </a>
          </div>
          <p class="footer-address">Rua Edna Ferreira, 117 | B. Floresta | Iturama/MG</p>
          <p class="m-0"><strong class="fw-medium">contato@palpitenacamara.com.br</strong></p>
          <p><strong class="fw-medium">(34) 99974-9344</strong></p>

          <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_facebook" /></svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_twitter" /></svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg"><use href="#icon_instagram" /></svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg"><path   d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" /></svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg"><use href="#icon_pinterest" /></svg>
              </a>
            </li>
          </ul>
        </div>

        {{-- <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h6 class="sub-menu__title text-uppercase">Compania</h6>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="about-2.html" class="menu-link menu-link_us-s">Quem somos</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Carreiras</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Afiliados</a></li>
            <li class="sub-menu__item"><a href="blog_list1.html" class="menu-link menu-link_us-s">Blog</a></li>
            <li class="sub-menu__item"><a href="contact-2.html" class="menu-link menu-link_us-s">Contato</a></li>
          </ul>
        </div>

        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h6 class="sub-menu__title text-uppercase">Comprar</h6>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">Novidades</a></li>
            <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessórios</a></li>
            <li class="sub-menu__item"><a href="shop4.html" class="menu-link menu-link_us-s">Homem</a></li>
            <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Mulher</a></li>
            <li class="sub-menu__item"><a href="shop1.html" class="menu-link menu-link_us-s">Comprar tudo</a></li>
          </ul>
        </div>

        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h6 class="sub-menu__title text-uppercase">Ajuda</h6>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Serviços ao cliente</a></li>
            <li class="sub-menu__item"><a href="account_dashboard.html" class="menu-link menu-link_us-s">Minha conta</a>
            </li>
            <li class="sub-menu__item"><a href="store_location.html" class="menu-link menu-link_us-s">Encontre uma loja</a>
            </li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Privacidade</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Cartão de presente</a></li>
          </ul>
        </div>

        <div class="footer-column footer-menu mb-4 mb-lg-0">
          <h6 class="sub-menu__title text-uppercase">Categorias</h6>
          <ul class="sub-menu__list list-unstyled">
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Camisetas</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Calças jeans</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Sapatos</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Bolsas</a></li>
            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Comprar tudo</a></li>
          </ul>
        </div>
      </div> --}}
    </div>

    <div class="footer-bottom">
      <div class="container d-md-flex align-items-center">
        <span class="footer-copyright me-auto">©2024 Palpite na câmara</span>
        <div class="footer-settings d-md-flex align-items-center">
          <a href="privacy-policy.html">Política de privacidade</a> &nbsp;|&nbsp; <a href="terms-conditions.html">Termos &amp; Condições</a>
        </div>
      </div>
    </div>
  </footer>

  {{-- footer celular --}}
  <footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
    <div class="row text-center">
      <div class="col-4">
        <a href="{{ route('home.index') }}" class="footer-mobile__link d-flex flex-column align-items-center">
          <svg class="d-block" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_home" /></svg>
          <span>Início</span>
        </a>
      </div>

      <div class="col-4">
        <a href="{{ route('home.index') }}" class="footer-mobile__link d-flex flex-column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          <span>Cidades</span>
        </a>
      </div>

      <div class="col-4">
        <a href="{{ route('home.index') }}" class="footer-mobile__link d-flex flex-column align-items-center">
          <div class="position-relative">
            <svg class="d-block" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
            <span class="wishlist-amount d-block position-absolute js-wishlist-count">33</span>
          </div>
          <span>Favoritos</span>
        </a>
      </div>
    </div>
  </footer>