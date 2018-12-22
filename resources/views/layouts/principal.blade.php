<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Invest project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset ('images/fav-icon.png')}}" type="image/x-icon" />
  {!!Html::style('styles/bootstrap4/bootstrap.min.css')!!}
  {!!Html::style('plugins/font-awesome-4.7.0/css/font-awesome.min.css')!!}
  {!!Html::style('plugins/OwlCarousel2-2.2.1/owl.carousel.css')!!}
  {!!Html::style('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')!!}
  {!!Html::style('plugins/OwlCarousel2-2.2.1/animate.css')!!}
  {!!Html::style('styles/main_styles.css')!!}
  {!!Html::style('styles/responsive.css')!!}
  {!!Html::style('web-fonts-with-css/css/fontawesome-all.min.css')!!}
  {!!Html::style('web-fonts-with-css/css/fa-solid.min.css')!!}
  {!!Html::style('web-fonts-with-css/css/fa-brands.min.css')!!}
  {!!Html::style('web-fonts-with-css/css/fa-regular.min.css')!!}
  </head>

  <body>

<div class="super_container">
  <!-- Home -->
  <div class="home">
    <div class="home_slider_container"> 
      <!-- Home Slider -->
      <div class="owl-carousel owl-theme home_slider">
        <!-- Slider Item -->
        <div class="owl-item">
          <div class="slider_background" style="background-image:url('{{ asset ('images/home_slider_1.jpg')}}')"></div>
          <div class="home_slider_content text-center">
            <h1>@yield('titulo1')</h1>
            <div class="home_slider_text">@yield('titulo2')</div>
          </div>
        </div>
      </div>
    <!-- Header -->
    <header class="header">
      <!-- Top Bar -->
      <div class="top_bar">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
                <div class="logo_container">
                  <div class="logo">
                    <a href="#">
                      <div class="logo_line_1"><span>Magio</span>Soft</div>
                      <div class="logo_line_2">Dearrollo de Software</div>
                      <div class="logo_img"><img src="{{URL::asset('/images/logo.png')}}" alt=""></div>
                    </a>
                  </div>
                </div>

                <div class="top_bar_content ml-auto">
                  <div class="register_login"> 
                  <!--<div class="register"><a href="register">Registrar</a></div>  -->            
                  <div class="register"><a href="login">Ingresar</a></div>
                  <div class="login">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                  </div>
                  @if (auth()->check())
                  <div class="text-primary">
                    <h4> Usuario : {{auth()->user()->name}} </h4>  
                    <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
                  </div>
                  @endif
                  </div>  
                </div>
                <div class="burger">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>

      <!-- Main Menu -->
        <div class="main_menu">
        <div class="container">
            @yield('menu')
        </div>
      </div> 

      <!-- Menu -->

     <div class="menu">
        <div class="menu_register_login">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
         <!--          <div class="register"><a href="#">register</a></div>
                  <div class="login"><a href="#">login</a></div>  -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
</div>                    
  <!-- Fin Home -->
  <!-- Contenedor -->
  <div class="intro">
    <div class="container">
        @yield('content')
    </div>
  </div>
  <!-- Fin Contenedor -->
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <!-- Footer Izquierda -->
        <div class="col-lg-6 footer_col">
          <div class="footer_about">
            <div class="logo_container footer_logo">
              <div class="logo">
                <a href="#">
                  <div class="logo_line_1"><span>Magio</span>Soft</div>
                  <div class="logo_line_2">Dearrollo de Software</div>
                  <div class="logo_img"><img src="{{URL::asset('/images/logo.png')}}" alt=""></div>
                </a>
              </div>
            </div>
            <p class="footer_about_text">Una empresa dedicada a dar las mejores soluciones a los problemas de nuestros clientes, mejorando la experiencia del usuario y el confort de nuestro.</p>
          </div>
        </div>

        <!-- Footer Derecha -->
        <div class="col-lg-6 footer_col">
          <div class="footer_links">
            <div class="footer_title">Paginas Amigas</div>
            <ul>
              <li><a target="_blank" href="https://www.umss.edu.bo">UMSS</a></li>
              <li><a target="_blank" href="https://websis.umss.edu.bo">Websis</a></li>
              <li><a target="_blank" href="https://www.fcyt.umss.edu.bo">FCYT</a></li>
              <li><a target="_blank" href="https://www.memi.umss.edu.bo">MEMI</a></li>
              <li><a target="_blank" href="https://www.scesi.umss.edu.bo">SCESI</a></li>
              <li><a target="_blank" href="https://informatica.fcyt.umss.edu.bo">Informatica</a></li>
              <li><a target="_blank" href="https://claroline.cs.umss.edu.bo">LABINFSIS</a></li>
              <li><a target="_blank" href="https://moodle3.umss.edu.bo">Moddle</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-4 order-md-1 order-2">
            <div class="copyright_content d-flex flex-row align-items-center justify-content-start">
              <div class="cr">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos Los derechos reservados | Facultad de Ciencia y Tecnología | por MagioSoft
              </div>
            </div>
          </div>
          <div class="col-md-8 order-md-2 order-1">
            <nav class="footer_nav d-flex flex-row align-items-center justify-content-md-end">
              <ul>
                <li><a href="/">Inicio</a></li>

              </ul>
            </nav>
          </div>
        </div>
      </div>      
    </div>
  </footer>
</div>
</body>
  {!! Html::script('js/jquery-3.2.1.min.js') !!}
  {!! Html::script('styles/bootstrap4/popper.js') !!}
  {!! Html::script('styles/bootstrap4/bootstrap.min.js') !!}
  {!! Html::script('plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}
  {!! Html::script('plugins/easing/easing.js') !!}
  {!! Html::script('plugins/parallax-js-master/parallax.min.js') !!}
  {!! Html::script('js/custom.js') !!}

</html>
