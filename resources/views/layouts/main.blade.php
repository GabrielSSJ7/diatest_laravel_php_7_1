<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Diatest: @yield('title')</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Hind:400,700"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- HEADER -->
    <header   >
      <!-- top Header -->
      <div id="top-header" style="background:#005baa;">
        <div class="container"  >

          <div >
            <span style="color:white; font-size: 21px;">Bem-vindo ao site Diatest</span>
          </div>

        <!-- footer social -->
        <ul class="footer-social">

            <li>
                <a href="https://www.instagram.com/diatestdobrasil/">
                    <i class="fab fa-instagram fa-2x" style="color: white"></i>
                </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/diatest-do-brasil"><i class="fab fa-linkedin fa-2x"></i></a>
            </li>
          </ul>
        <!-- /footer social -->


		<div id="div-div-contato">
              <div id="div-contato">


                  <div id="div-children-contato" >
                      <div style="display: flex; flex-direction: row;     justify-content: center;">
                          <img style="-webkit-filter:invert(100%)" height="19" width="19" src="../img/phone-call.png" alt="">
                          <p style="margin: auto 10px;color:white">
                              (11) 2091-8811
                          </p>
                        </div>
                    <div style="display: flex; flex-direction: row; justify-content: center; align-content: center" >
                      <img style="-webkit-filter: invert(100%)" width="19" height="19" src="../img/message.png" alt="">
                      <p style="margin: auto 10px; color: white">
                          info@diatest.com.br
                      </p>
                    </div>

                  </div>

                </div>
            <!-- <ul class="header-top-links">
              <li>
                <a href="https://plus.google.com/110608236717101783102/about"
                  ><img
                    style="max-width:100%; width: 35px"
                    src="./img/google-plus.png"
                    alt=""
                /></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/diatest-do-brasil"
                  ><img
                    style="max-width:100%; width: 35px"
                    src="./img/linkedin.png"
                    alt=""
                /></a>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
      <!-- /top Header -->
      </div>
      <!-- container -->



      <!-- NAVIGATION -->
 <div id="navigation" >
        <!-- container -->
        <div class="container-fluid" style="display: flex">

          <!-- Logo -->
          <div class="header-logo" style="width:150px">
          <a class="logo" href="{{url('/')}}">
              <img src="{{ asset('/img/logo_t.png')}}" alt="" />
            </a>
          </div>

          <div class="header-search" id="search-mobile">
            <form action="{{ url('produtos/search') }}" method="POST" style="width: 90%">
                {{ csrf_field() }}
                <input
                    style="border-radius: 40px;outline: none;"
                    id="key"
                    name="key"
                    class="input search-input"
                    type="text"
                    placeholder="Pesquisar"
                />

            <button type="submit" style="color: white;background: #005baa;border-radius: 40px;margin-right: 5px;"  class="search-btn my-search-btn">
                <i class="fa fa-search"></i>
            </button>
            </form>
        </div>
          <li style="list-style: none; " class="header-account dropdown default-dropdown">
                <li class="nav-toggle" style="margin: auto 0 auto auto;list-style: none;">
                  <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
          </li>
          <div id="responsive-nav" class="nav-menu" style="margin: auto; width:100%">
            <!-- category nav -->
            <div class="category-nav ">
              <span class="category-header category-nav-toggle" style="cursor: pointer"
                >Categorias <i class="fa fa-list" style="cursor:pointer"
                ></i
              ></span>
            @if (!empty($categories))
            <ul id="lista-categorias" class="category-list">
                @foreach ($categories as $category)

                  <li class="dropdown side-dropdown">
                    <a
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="true"
                    >
                    <i class="fa fa-angle-right"></i>
                          {{ $category[0]}}</a>
                          @if (count($category) > 1)
                              <div class="custom-menu">
                                  <div class="row">
                                  <div class="col-md-12">
                                      <ul class="list-links">
                                          <li>
                                          <h3 class="list-links-title">{{ $category[0]}}</h3>
                                          </li>

                                          @foreach ($category[1] as $sub)
                                        <li><a href="{{ url('produtos/'.$sub['subSlug']) }}">{{ $sub['subName']}}</a></li>
                                          @endforeach

                                      </ul>
                                  </div>
                                  </div>
                              </div>
                        @endif
                    </li>
                @endforeach

            </ul>
            @endif

                  </div>
                <!-- /category nav -->


            <!-- menu nav -->
            <div class="menu-nav">
              <span class="menu-header">Menu <i class="fa fa-bars"></i></span>

              <ul class="menu-list" style="display:flex">

                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                  <li><a href="{{ url('/contato') }}">Contato</a></li>
                <li><a href="http://blog.diatest.com.br/">Blog</a></li>
                <li class="dropdown default-dropdown">
                  <a
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    aria-expanded="true"
                    >Marcas <i class="fa fa-caret-down"></i
                  ></a>
                  <ul class="custom-menu fabricantes-list">
                    @foreach ($factories as $factory)
                      <li class="li-fac"><a href="{{ url('produtos/fabricante', ['slug'=>$factory->slug]) }}">{{$factory->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
                 <!-- Search -->
                <li class="li-search" style="flex:1">
                        <div class="header-search" >
                                <form action="{{ url('produtos/search') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input
                                    style="border-radius: 40px;outline: none;"
                                        id="key"
                                        name="key"
                                        class="input search-input"
                                        type="text"
                                        placeholder="Pesquisar"
                                    />

                                   <button type="submit" style="color: white;background: #005baa;border-radius: 40px;margin-right: 5px;"
                                   class="search-btn my-search-btn">
                                    <i class="fa fa-search"></i>
                                   </button>
                                </form>
                            </div>
              <!-- /Search -->
                </li>
              </ul>
            </div>
            <!-- menu nav -->

          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /NAVIGATION -->

    </header>
    <!-- /HEADER -->






    @yield("content")

    <!-- FOOTER -->
    <footer id="footer" class="section section-grey" style="background: #005baa">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- footer widget -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <!-- footer logo -->
              <div class="footer-logo">
                <a class="logo" href="./produtos.html?cat=10">
                  <img src="{{ asset('img/logo_t.png')}}" alt="" />
                </a>
              </div>
              <!-- /footer logo -->

              {{-- <p style="color: white">
					Diatest do Brasil Produtos de Medição Ltda<br>
					Rua Ulisses Cruz, 1052 • 3 Andar • Cj. 6 • Tatuapé • São Paulo • (11) 2091-8811
              </p> --}}

              <!-- footer social -->
              <p style="color: white; text-align: center; font-weight: bold">SIGA-NOS NAS REDES SOCIAIS</p>
              <div style="text-align: center">
              <ul class="footer-social" >

                <li>
                    <a href="https://www.instagram.com/diatestdobrasil/">
                        <i class="fab fa-instagram fa-2x" style="color: white"></i>
                    </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/company/diatest-do-brasil"><i class="fab fa-linkedin fa-2x"></i></a>
                </li>
              </ul>
            </div>
              <!-- /footer social -->
            </div>
          </div>
          <!-- /footer widget -->

          <!-- footer widget -->
          <!-- <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <h3 class="footer-header">My Account</h3>
              <ul class="list-links">
                <li><a href="#">My Account</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Compare</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div> -->
          <!-- /footer widget -->

          <div class="clearfix visible-sm visible-xs"></div>

          <!-- footer widget -->
          <div class="col-md-5 col-sm-6 col-xs-6" style="text-align: center">
            <div class="footer">
              <h3 class="footer-header" style="color:white">Menu</h3>
              <ul class="list-links" >
                <li><a style="color: white" href="{{ url('/') }}">Home</a></li>
                <li><a style="color: white" href="{{ url('quem-somos') }}">Quem Somos</a></li>
                <li><a style="color: white" href="{{ url('contato') }}">Contato</a></li>
                <li><a style="color: white" href="http://blog.diatest.com.br">Blog</a></li>
              </ul>
            </div>
          </div>
          <!-- /footer widget -->

          <!-- footer subscribe -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <h3 class="footer-header" style="color: white">Permaneça Conectado</h3>
              <p style="color:white">
                Assine nossa Newslatter
              </p>
              <form>
                <div class="form-group">
                  <input id="newsletterinput" class="input" placeholder="Enter Email Address" style="color:white" placeholder />
                </div>
                <button class="primary-btn">Join Newslatter</button>
              </form>
            </div>
		  </div>
		  <style>
			  input#newsletterinput::-webkit-input-placeholder {
  				color: white;
			  }
		  </style>
          <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr />
        <!-- row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <!-- footer copyright -->
            <div class="footer-copyright" style="color:white">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Todos os direitos reservados © Diatest do Brasil Produtos de Medição Ltda 2015
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <!-- /footer copyright -->
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/slick.min.js')}}"></script>
    <script src="{{ asset('js/nouislider.min.js')}}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/wp.js')}}"></script>
    <style>
    .sticky {

        top: 0;
        position: fixed;
        z-index: 99999 !important;
        width: 100%;
        animation: smoothScroll 1.5s forwards;
    }
@keyframes smoothScroll {
	0% {
        z-index: 9999 !important;
		transform: translateY(-150px);
	}
	100% {
        z-index: 9999 !important;
		transform: translateY(0px);
	}
}

.dropdown-backdrop {
	display: none !important;
}
</style>
    <script>

 $(document).ready(function(){

            $("div.dropdown-backdrop").remove();



  $(".produto-imgs").on('click', function(){
    const imgSrc = $(this).prop('src');

    //$("#produto-img").prop('src', imgSrc);

    const image = $("#produto-img")

    image.fadeOut('fast', function () {
//        image.prop('src', imgSrc);
        image.css("background-image", `url(${imgSrc})`)
        image.fadeIn('slow');
    });
  });

});


            window.onscroll = function() {myFunction()};

            var navbar = document.getElementById("navigation");
            var sticky = navbar.offsetTop;
            var timeout = null

            if (window.pageYOffset > sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            function myFunction() {
              if (window.pageYOffset > sticky) {

                 navbar.classList.add("sticky")

              } else {

                //clearTimeout();
                navbar.classList.remove("sticky");
              }
            }
            </script>
  </body>
</html>
